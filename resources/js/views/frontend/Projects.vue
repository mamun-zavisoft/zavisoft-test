<template>
    <section>
        <div class=" mt-[-120px] pb-8">
            <div class="container">
                <div class=" pt-20 md:pt-24 lg:pt-30 xl:pt-36">
                    <div class="flex flex-col gap-4 ">
                        <h1 class="  text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900">
                            Our latest projects
                        </h1>
                        <p class="text-sm md:text-base text-neutral-600">We create appealing, user-friendly designs that
                            help our clients delight the audience, increase brand awareness.</p>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="pb-8 md:pb-10 lg:pb-12">
        <div class="container">
            <div class="case-study-tabs">
                <fwb-tabs v-model="activeTab" variant="pills">
                    <fwb-tab v-for="cat in categories" :key="cat.name" :name="cat.name" :title="cat.label">
                        <!-- Tab Content -->
                        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">
                            <article v-for="project in filteredProjects" :key="project.id"
                                class="bg-white rounded-lg  p-4 transition group border border-transparent hover:border-primary-500"
                                style="box-shadow: 0px 2px 4px 0px #0F1C330F, 0px 2px 2px 0px #0F1C3312;">
                                <div class="flex justify-between items-start">
                                    <div class="mb-4 pr-4">
                                        <h3 class="text-lg md:text-xl font-bold text-neutral-900 mb-3">{{
                                            project.title
                                            }}</h3>
                                        <p class="text-neutral-600 text-sm line-clamp-3">{{ project.description }}
                                        </p>
                                    </div>

                                    <router-link :to="{ name: 'CaseStudyDetails', params: { id: project.id } }"
                                        class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="h-4 w-4 md:w-5 md:h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </router-link>
                                </div>
                                <ul class="flex flex-wrap gap-2">
                                    <li v-for="tech in project.tech" :key="tech"
                                        class="px-3 py-1 bg-neutral-100 text-neutral-700 text-xs rounded-full">
                                        {{ tech }}
                                    </li>
                                </ul>
                                <img :src="project.image" :alt="project.title"
                                    class="w-full rounded-lg object-cover mt-4" />
                            </article>
                        </div>
                    </fwb-tab>
                </fwb-tabs>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>
</template>

<script setup>
import { ref, computed } from 'vue'
import { FwbTab, FwbTabs } from 'flowbite-vue'
import StartBuilding from '@/components/section/StartBuilding.vue';


const activeTab = ref('all')
const projects = [
    {
        id: 1,
        title: 'ShopNest – Ecommerce Platform',
        category: 'ecommerce',
        description: 'A full-featured online shopping platform with real-time inventory sync.',
        image: new URL('@/assets/images/service/soft.png', import.meta.url).href,
        tech: ['Vue', 'Tailwind', 'Firebase'],
    },
    {
        id: 2,
        title: 'FoodieHub – Mobile Delivery App',
        category: 'mobile-app',
        description: 'Cross-platform food delivery app built with Flutter and Node.js backend.',
        image: new URL('@/assets/images/service/soft.png', import.meta.url).href,
        tech: ['Flutter', 'Node.js', 'MongoDB'],

    },
    {
        id: 3,
        title: 'Insightly – Admin Dashboard',
        category: 'admin-dashboard',
        description: 'Advanced analytics dashboard for tracking business KPIs in real time.',
        image: new URL('@/assets/images/service/soft.png', import.meta.url).href,
        tech: ['React', 'Chart.js', 'Express'],

    },
    {
        id: 4,
        title: 'TechCart – Ecommerce Solution',
        category: 'ecommerce',
        description: 'Scalable multi-vendor store optimized for SEO and mobile users.',
        image: new URL('@/assets/images/service/soft.png', import.meta.url).href,
        tech: ['Next.js', 'Prisma', 'PostgreSQL'],

    },
    {
        id: 5,
        title: 'HealthTrack – Fitness Mobile App',
        category: 'mobile-app',
        description: 'Personal fitness tracking app with habit reminders and dark mode.',
        image: new URL('@/assets/images/service/soft.png', import.meta.url).href,
        tech: ['Flutter', 'Dart', 'Firebase'],

    },
]

const categories = [
    { name: 'all', label: 'All' },
    { name: 'ecommerce', label: 'Ecommerce' },
    { name: 'mobile-app', label: 'Mobile App' },
    { name: 'admin-dashboard', label: 'Admin Dashboard' },

]

const filteredProjects = computed(() => {
    if (activeTab.value === 'all') return projects
    return projects.filter(p => p.category === activeTab.value)
})
</script>
