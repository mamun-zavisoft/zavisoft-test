import { createRouter, createWebHistory } from "vue-router";
import { useAuthStore } from "@/stores/auth";
import { setMetaTag, setPropertyTag } from "@/utils/seo";

import routes from "./routes";

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    }
});

router.beforeEach(async (to, from, next) => {
    const authStore = useAuthStore();
    const isBrowser = typeof window !== "undefined" && typeof document !== "undefined";
    const hasSpaRoot = isBrowser && document.getElementById("app");
    const isBackendRoute = to.path?.startsWith?.("/admin");

    // Skip SPA guard logic when we're on backend views or the app root doesn't exist.
    if (!hasSpaRoot || isBackendRoute) {
        return next();
    }

    // Set page title
    document.title = to.meta.title ? `${to.meta.title} | Zavisoft` : "Zavisoft";

    // SEO META
    if (to.meta) {
        if (to.meta.description) {
            setMetaTag("description", to.meta.description);
        }

        if (to.meta.keywords) {
            setMetaTag("keywords", to.meta.keywords);
        }

        // Open Graph
        setPropertyTag("og:title", to.meta.title || "Zavisoft");
        setPropertyTag("og:description", to.meta.description || "");
        setPropertyTag("og:url", window.location.href);
    }


    // Check authentication status
    const isAuthenticated = authStore.isAuthenticated;
    const isPublicRoute = to.meta.public;
    const requiresAuth = to.meta.requiresAuth;
    const allowVerified = to.meta.allowVerified;
    const role = authStore.role;
    const emailVerified = authStore.emailVerified;

    // Redirect authenticated users away from public routes
    if (isAuthenticated && isPublicRoute && !allowVerified) {
        // Redirect to appropriate dashboard based on user role
        const redirectPath = role === "admin"
            ? "/admin/dashboard"
            : "/user/dashboard";
        return next(redirectPath);
    }

    // Handle protected routes
    if (requiresAuth) {
        if (!isAuthenticated) {
            // Redirect to login with return URL
            return next("/login");
        }

        // Check if email is verified
        if (emailVerified === false && to.name !== 'VerifyEmail') {
            return next('/verify-email');
        }

        // Verify token with backend
        try {
            const isValid = await authStore.verifyToken();
            if (!isValid) {
                authStore.logout();
                return next("/login");
            }
        } catch (error) {
            authStore.logout();
            return next("/login");
        }

        // Check user role if required
        if (to.meta.requiredRole) {
            if (role !== to.meta.requiredRole) {
                // Redirect to unauthorized page if roles don't match
                return next("/unauthorized");
            }
        }
    }

    // Continue to the requested route
    next();
});

export default router;
