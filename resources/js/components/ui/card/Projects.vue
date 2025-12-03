<template>
    <div class="case-study-tabs">
        <fwb-tabs v-model="activeTab" variant="pills">
            <fwb-tab v-for="cat in categories" :key="cat.name" :name="cat.name" :title="cat.label">
                <!-- Tab Content -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">
                    <article v-for="project in filteredProjects" :key="project.id"
                        class="wow animate__zoomIn animate__animated bg-white rounded-lg p-4 transition group border border-transparent hover:border-primary-500"
                        style="box-shadow: 0px 2px 4px 0px #0F1C330F, 0px 2px 2px 0px #0F1C3312;">
                        <div class="flex justify-between items-start">
                            <div class="mb-4 pr-4">
                                <h3 class="text-base md:text-lg lg:text-xl font-bold text-neutral-900 mb-3">
                                    {{ project.title }}
                                </h3>
                                <p class="text-neutral-600 text-sm line-clamp-3">
                                    {{ project.about_project }}
                                </p>
                            </div>

                            <router-link :to="{ name: 'ProjectsDetails', params: { id: project.id } }"
                                class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="h-4 w-4 md:w-5 md:h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </router-link>
                        </div>

                        <img :src="`/storage/${project.banner_image}`" :alt="project.title"
                            class="w-full rounded-lg object-cover mt-4" />
                    </article>
                </div>

                <!-- Empty state -->
                <div v-if="filteredProjects.length === 0" class="text-center py-12">
                    <p class="text-neutral-500">No projects found in this category.</p>
                </div>
            </fwb-tab>
        </fwb-tabs>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { FwbTab, FwbTabs } from 'flowbite-vue'

// Active tab state
const activeTab = ref('all')

// Projects data
const projects = ref([])

// Categories with IDs matching backend
const categories = [
    { id: null, name: 'all', label: 'All' },
    { id: 1, name: 'ecommerce', label: 'Ecommerce' },
    { id: 2, name: 'mobile-app', label: 'Mobile App' },
    { id: 3, name: 'admin-dashboard', label: 'Admin Dashboard' },
]

// Fetch projects from API
const fetchProjects = async () => {
    try {
        const res = await fetch('/api/projects', {
            headers: { 'Accept': 'application/json' }
        })

        if (!res.ok) throw new Error("Failed to load projects")

        const json = await res.json()

        // Map backend fields properly
        projects.value = (json.data || []).map((p, index) => ({
            id: p.id ?? index,
            title: p.title,
            about_project: p.about_project,
            banner_image: p.banner_image,
            category_id: p.category_id,
            category_name: p.category_name
        }))

        console.log("Projects loaded:", projects.value)
    } catch (e) {
        console.error("Error fetching projects:", e)
    }
}

// Computed filtered projects
const filteredProjects = computed(() => {
    // Show all projects for 'all' tab
    if (activeTab.value === 'all') {
        return projects.value
    }

    // Find the selected category by name
    const selectedCategory = categories.find(c => c.name === activeTab.value)

    if (!selectedCategory) {
        return projects.value
    }

    // Filter projects by category_id
    return projects.value.filter(p => p.category_id === selectedCategory.id)
})

// Fetch projects on component mount
onMounted(fetchProjects)
</script>

<style scoped>
.cursor-pointer {
    cursor: pointer;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>