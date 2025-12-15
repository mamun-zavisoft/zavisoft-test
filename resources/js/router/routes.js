import LayoutFrontend from "@/layouts/Frontend.vue";
import LayoutError from "@/layouts/Error.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: () => import("@/views/frontend/Home.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Software Development Company | Web & Mobile Solutions",
            description: "Leading software development company delivering custom web, mobile, and enterprise solutions for startups and businesses.",
            keywords: "software development company, web development, mobile app development, custom software, IT solutions"
        }, 
    },

    {
        path: "/about",
        name: "About",
        component: () => import("@/views/frontend/About.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "About Us | Expert Software Development Company",
            description: "Learn about our software development company, mission, vision, and expert development team delivering scalable digital solutions.",
            keywords: "about software company, software developers, IT company, development team"
        }, 
    },

    {
        path: "/team",
        name: "Team",
        component: () => import("@/views/frontend/Team.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Our Team | Professional Software Developers",
            description: "Meet our experienced team of software engineers, designers, and project managers.",
            keywords: "software development team, developers, engineers, IT professionals"
        }, 
    },

    {
        path: "/projects",
        name: "Projects",
        component: () => import("@/views/frontend/Projects.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Our Projects | Custom Software & App Development",
            description: "Explore our portfolio of web, mobile, and enterprise software development projects.",
            keywords: "software projects, web development portfolio, mobile app projects, custom software"
        }, 
    },

    {
        path: "/projects/:slug",
        name: "ProjectsDetails",
        component: () => import("@/views/frontend/ProjectsDetails.vue"),
        props: true,
        meta: {
            layout: LayoutFrontend,
            title: "Project Details | Software Development Case Study",
            description: "Detailed case study of our custom software development projects and solutions.",
            keywords: "software case study, project details, development portfolio"
        }, 
    },

    {
        path: "/career",
        name: "Career",
        component: () => import("@/views/frontend/Career.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Careers | Software Developer Jobs",
            description: "Join our software development company and grow your career with exciting projects.",
            keywords: "software developer jobs, IT careers, programming jobs, tech careers"
        }, 
    },

    {
        path: "/apply/:slug",
        name: "JobApply",
        component: () => import("@/views/frontend/JobApply.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Apply for Job | Software Development Career",
            description: "Apply for open positions at our software development company.",
            keywords: "apply software job, developer application, IT job apply"
        }, 
    },

    {
        path: "/career/:slug",
        name: "CareerDetails",
        component: () => import("@/views/frontend/CareerDetails.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Career Details | Software Developer Position",
            description: "View detailed job requirements and responsibilities for software development roles.",
            keywords: "software developer job details, IT job description"
        }, 
    },

    {
        path: "/blog",
        name: "Blog",
        component: () => import("@/views/frontend/Blog.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Tech Blog | Software Development Insights",
            description: "Read our latest articles on software development, technology trends, and best practices.",
            keywords: "software development blog, tech blog, programming articles"
        }, 
    },

    {
        path: "/blog/:id",
        name: "BlogDetails",
        component: () => import("@/views/frontend/BlogDetails.vue"),
        props: true,
        meta: {
            layout: LayoutFrontend,
            title: "Blog Details | Software Development Article",
            description: "In-depth software development articles and technical insights.",
            keywords: "software blog details, programming article, tech insights"
        }, 
    },

    {
        path: "/contact",
        name: "Contact",
        component: () => import("@/views/frontend/Contact.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Contact Us | Software Development Company",
            description: "Contact our software development company for custom web and mobile solutions.",
            keywords: "contact software company, hire developers, IT services"
        }, 
    },

    {
        path: "/services/:slug",
        name: "serviceDetails",
        component: () => import("@/views/frontend/services/Service.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Our Services | Custom Software Development",
            description: "Professional software development services including web, mobile, and enterprise solutions.",
            keywords: "software development services, web development services, mobile app development"
        }, 
    },

    {
        path: "/success",
        name: "success",
        component: () => import("@/views/frontend/Success.vue"),
        meta: {
            layout: LayoutFrontend,
            title: "Success | Project Completed Successfully",
            description: "Your request has been successfully submitted.",
            keywords: "project success, submission success"
        }, 
    },

    {
        path: "/:pathMatch(.*)*",
        name: "NotFound",
        component: () => import("@/views/errors/NotFound.vue"),
        meta: {
            layout: LayoutError,
            title: "404 | Page Not Found",
            description: "The page you are looking for does not exist.",
            keywords: "404 error, page not found"
        }, 
    },
];

export default routes;
