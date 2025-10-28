import { createRouter, createWebHistory } from "vue-router";
import { useAuthStore } from "@/stores/auth";
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

    // Set page title
    document.title = to.meta.title ? `${to.meta.title} | Zavisoft` : "Zavisoft";

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