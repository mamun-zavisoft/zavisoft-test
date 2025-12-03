<template>
    <section>
        <div class="container">
            <div class="flex flex-col gap-4 mb-6 lg:mb-8 ">
                <h1
                    class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900 wow animate__animated animate__fadeInUp">
                    Our latest projects
                </h1>
                <p class="text-sm md:text-base text-neutral-600 wow animate__animated animate__fadeInUp">We create
                    appealing, user-friendly designs that
                    help our clients delight the audience, increase brand awareness.</p>

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
import { FwbTab, FwbTabs } from 'flowbite-vue'
import StartBuilding from '@/components/section/StartBuilding.vue';
import Projects from '@/components/ui/card/Projects.vue';


const activeTab = ref('all')
const projects = [
    {
        id: 1,
        title: 'Packly',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['e-commerce'],
        image: new URL('@/assets/images/project_3.png', import.meta.url).href,

    },
    {
        id: 2,
        title: 'Packly - Super App',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['e-commerce'],
        image: new URL('@/assets/images/project_2.png', import.meta.url).href,


    },
    {
        id: 3,
        title: 'Packly - Event',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_1.png', import.meta.url).href,


    },
    {
        id: 4,
        title: 'Packly - Shopping',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_3.png', import.meta.url).href,
        category: 'ecommerce'


    },
    {
        id: 5,
        title: 'Packly',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_2.png', import.meta.url).href,
        category: 'mobile-app'



    },
    {
        id: 6,
        title: 'Packly - Zavisoft',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_1.png', import.meta.url).href,
        category: 'ecommerce'

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
