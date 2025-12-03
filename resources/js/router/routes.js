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

    // dynamic service route

    {
        path: '/services/:id?',
        name: "serviceDetails",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: { layout: LayoutFrontend, title: "Service Details" },
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
