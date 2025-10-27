<template>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
        <div v-for="(service, index) in services" :key="index" class="bg-white rounded-lg  p-4 transition group">
            <div class="flex justify-between items-start mb-4">
                <div class="mb-4 pr-4">
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">{{ service.title }}</h3>
                    <p class="text-neutral-600 text-sm line-clamp-3">{{ service.description }}
                    </p>
                </div>
                <router-link :to="service.link"
                    class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </router-link>
            </div>
            <img :src="service.image" :alt="service.title" class="w-full rounded-lg object-cover mt-4" />
        </div>
    </div>

</template>

<script setup>

const services = [
    {
        id: 1,
        title: 'UI/UX Design & Audit',
        description: 'A full-featured online shopping platform with real-time inventory sync.',
        image: new URL('@/assets/images/service/ui.png', import.meta.url).href,
        link: "/services/ui-ux-design-audit",
    },
    {
        id: 2,
        title: 'Software Development',
        category: 'mobile-app',
        description: 'Cross-platform food delivery app built with Flutter and Node.js backend.',
        image: new URL('@/assets/images/service/soft.png', import.meta.url).href,
        link: "/services/software-development",


    },
    {
        id: 3,
        title: 'Web Application Development',
        category: 'admin-dashboard',
        description: 'Advanced analytics dashboard for tracking business KPIs in real time.',
        image: new URL('@/assets/images/service/web.png', import.meta.url).href,
        link: "/services/web-development",


    },
    {
        id: 4,
        title: 'Mobile App Developement',
        category: 'ecommerce',
        description: 'Scalable multi-vendor store optimized for SEO and mobile users.',
        image: new URL('@/assets/images/service/app.png', import.meta.url).href,
        link: "/services/mobile-app-development",


    },
    {
        id: 5,
        title: 'QA Testing',
        category: 'mobile-app',
        description: 'Personal fitness tracking app with habit reminders and dark mode.',
        image: new URL('@/assets/images/service/qa.png', import.meta.url).href,
        link: "/services/qa-testing",


    },
    {
        id: 6,
        title: 'Database Management',
        description: 'Personal fitness tracking app with habit reminders and dark mode.',
        image: new URL('@/assets/images/service/database.png', import.meta.url).href,
        link: "/services/database-management",


    },
]
</script>