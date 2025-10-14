import LayoutAuth from "@/layouts/Auth.vue";
import LayoutAdmin from "@/layouts/Admin.vue";
import LayoutFrontend from "@/layouts/Frontend.vue";
import LayoutUser from "@/layouts/User.vue";
import LayoutError from "@/layouts/Error.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: () => import("@/pages/frontend/Home.vue"),
        meta: { layout: LayoutFrontend, title: "Home" },
    },
    {
        path: "/about",
        name: "About",
        component: () => import("@/pages/frontend/About.vue"),
        meta: { layout: LayoutFrontend, title: "About" },
    },
    {
        path: "/contact",
        name: "Contact",
        component: () => import("@/pages/frontend/Contact.vue"),
        meta: { layout: LayoutFrontend, title: "Contact" },
    },
    {
        path: "/login",
        name: "Login",
        component: () => import("@/pages/auth/Login.vue"),
        meta: {
            layout: LayoutAuth,
            title: "Login",
            public: true,
        },
    },
    {
        path: "/register",
        name: "Register",
        component: () => import("@/pages/auth/Register.vue"),
        meta: {
            layout: LayoutAuth,
            title: "Register",
            public: true,
        },
    },
    {
        path: "/verify-email",
        name: "VerifyEmail",
        component: () => import("@/pages/auth/VerifyEmail.vue"),
        meta: {
            layout: LayoutAuth,
            title: "Verify Email",
            requiresAuth: true,
            allowUnverified: true, // Special flag to allow unverified users
        },
    },
    {
        path: "/forgot-password",
        name: "ForgotPassword",
        component: () => import("@/pages/auth/ForgotPassword.vue"),
        meta: {
            layout: LayoutAuth,
            title: "Forgot Password",
            public: true,
        },
    },
    {
        path: "/admin/dashboard",
        name: "AdminDashboard",
        component: () => import("@/pages/admin/Dashboard.vue"),
        meta: {
            layout: LayoutAdmin,
            title: "Admin Dashboard",
            requiresAuth: true,
            requiredRole: "admin",
        },
    },
    {
        path: "/user/dashboard",
        name: "UserDashboard",
        component: () => import("@/pages/user/Dashboard.vue"),
        meta: {
            layout: LayoutUser,
            title: "User Dashboard",
            requiresAuth: true,
            requiredRole: "user",
        },
    },
    {
        path: "/unauthorized",
        name: "Unauthorized",
        component: () => import("@/pages/errors/Unauthorized.vue"),
        meta: {
            layout: LayoutError,
            title: "Unauthorized Access",
        },
    },
    {
        path: "/:pathMatch(.*)*",
        name: "NotFound",
        beforeEnter: (to) => {
            // Redirect to home if the path is exactly "/"
            if (to.path === "/") {
                return "/";
            }
            // Otherwise show 404 page
            return true;
        },
        component: () => import("@/pages/errors/NotFound.vue"),
        meta: {
            layout: LayoutError,
            title: "Page Not Found",
        },
    },
];

export default routes;
