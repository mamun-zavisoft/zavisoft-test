import LayoutFrontend from "@/layouts/Frontend.vue";
import LayoutError from "@/layouts/Error.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: () => import("@/views/frontend/Home.vue"),
        meta: { layout: LayoutFrontend, title: "Home" },
    },
    // {
    //     path: "/casestudy",
    //     name: "CaseStudy",
    //     component: () => import("@/views/frontend/CaseStudy.vue"),
    //     meta: { layout: LayoutFrontend, title: "Case Study" },
    // },
    // {
    //     path: '/case-study/:id',
    //     name: 'CaseStudyDetails',
    //     component: () => import('@/views/frontend/CaseStudyDetails.vue'),
    //     props: true,
    //     meta: { layout: LayoutFrontend, title: "Case Study" },
    // },

    {
        path: "/about",
        name: "About",
        component: () => import("@/views/frontend/About.vue"),
        meta: { layout: LayoutFrontend, title: "About Us" },
    },
    {
        path: "/projects",
        name: "Projects",
        component: () => import("@/views/frontend/Projects.vue"),
        meta: { layout: LayoutFrontend, title: "Our Projects" },
    },
    {
        path: '/projects/:id',
        name: 'ProjectsDetails',
        component: () => import('@/views/frontend/ProjectsDetails.vue'),
        props: true,
        meta: { layout: LayoutFrontend, title: "Projects Details" },
    },

    {
        path: "/career",
        name: "Career",
        component: () => import("@/views/frontend/Career.vue"),
        meta: { layout: LayoutFrontend, title: "Career" },
    },
    // {
    //     path: "/job-apply",
    //     name: "JobApply",
    //     component: () => import("@/views/frontend/JobApply.vue"),
    //     meta: { layout: LayoutFrontend, title: "Job Apply" },
    // },

    {
        path: '/apply/:jobId',
        name: 'JobApply',
        component: () => import("@/views/frontend/JobApply.vue"),
        meta: { layout: LayoutFrontend, title: "Job Apply" },
    },

    {
        path: '/career/:id',
        name: 'CareerDetails',
        component: () => import('@/views/frontend/CareerDetails.vue'),
        props: true,
        meta: { layout: LayoutFrontend, title: "Career Details" },
    },
    {
        path: "/blog",
        name: "Blog",
        component: () => import("@/views/frontend/Blog.vue"),
        meta: { layout: LayoutFrontend, title: "Blog" },
    },

    // static routes
    {
        path: "/blog-one",
        name: "BlogOne",
        component: () => import("@/views/frontend/BlogOne.vue"),
        meta: { layout: LayoutFrontend, title: "Blog One" },
    },
    {
        path: "/blog-two",
        name: "BlogTwo",
        component: () => import("@/views/frontend/BlogTwo.vue"),
        meta: { layout: LayoutFrontend, title: "Blog Two" },
    },
    {
        path: "/blog-three",
        name: "BlogThree",
        component: () => import("@/views/frontend/BlogThree.vue"),
        meta: { layout: LayoutFrontend, title: "Blog Three" },
    },
    {
        path: "/blog-four",
        name: "BlogFour",
        component: () => import("@/views/frontend/BlogFour.vue"),
        meta: { layout: LayoutFrontend, title: "Blog Four" },
    },

    // static routes
    {
        path: '/blog/:id',
        name: 'BlogDetails',
        component: () => import('@/views/frontend/BlogDetails.vue'),
        props: true,
        meta: { layout: LayoutFrontend, title: "Blog Details" },
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
