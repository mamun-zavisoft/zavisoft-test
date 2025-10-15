import LayoutFrontend from "@/layouts/Frontend.vue";
import LayoutError from "@/layouts/Error.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: () => import("@/views/frontend/Home.vue"),
        meta: { layout: LayoutFrontend, title: "Home" },
    },
    {
        path: "/casestudy",
        name: "CaseStudy",
        component: () => import("@/views/frontend/CaseStudy.vue"),
        meta: { layout: LayoutFrontend, title: "Case Study" },
    },
    {
        path: "/about",
        name: "About",
        component: () => import("@/views/frontend/About.vue"),
        meta: { layout: LayoutFrontend, title: "About Us" },
    },
    {
        path: "/career",
        name: "Career",
        component: () => import("@/views/frontend/Career.vue"),
        meta: { layout: LayoutFrontend, title: "Career" },
    },
    {
        path: "/blog",
        name: "Blog",
        component: () => import("@/views/frontend/Blog.vue"),
        meta: { layout: LayoutFrontend, title: "Blog" },
    },
    {
        path: "/contact",
        name: "Contact",
        component: () => import("@/views/frontend/Contact.vue"),
        meta: { layout: LayoutFrontend, title: "Contact" },
    },

    // Service Routes
    {
        path: "/services/ui-ux-design-audit",
        name: "UIDesignAudit",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "UI/UX Design & Audit" },
    },
    {
        path: "/services/software-development",
        name: "SoftwareDevelopment",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "Software Development" },
    },
    {
        path: "/services/web-development",
        name: "WebDevelopment",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "Web Development" },
    },
    {
        path: "/services/mobile-app-development",
        name: "MobileAppDevelopment",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "Mobile App Development" },
    },
    {
        path: "/services/qa-testing",
        name: "QATesting",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "QA Testing" },
    },
    {
        path: "/services/database-management",
        name: "DatabaseManagement",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "Database Management" },
    },

    // ✅ Catch-all 404
    {
        path: "/:pathMatch(.*)*",
        name: "NotFound",
        component: () => import("@/views/errors/NotFound.vue"),
        meta: { layout: LayoutError, title: "Page Not Found" },
    },
];

export default routes;
