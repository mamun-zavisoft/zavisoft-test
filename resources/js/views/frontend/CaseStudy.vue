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
           <Projects />
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>
</template>

<script setup>
import { ref, computed } from 'vue'
import Projects from '@/components/ui/card/Projects.vue';
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
