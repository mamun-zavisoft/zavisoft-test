<template>
    <div class="case-study-tabs">
        <fwb-tabs v-model="activeTab" variant="pills">
            <!-- Render tabs dynamically -->
            <fwb-tab v-for="cat in categoriesWithLabels" :key="cat.name" :name="cat.name" :title="cat.label">
                <!-- Projects grid -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-6">

                    <article v-for="project in filteredProjects" :key="project.id"
                        class="wow animate__zoomIn animate__animated bg-white rounded-lg p-4 transition group border border-transparent hover:border-primary-500"
                        style="box-shadow: 0px 2px 4px 0px #0F1C330F, 0px 2px 2px 0px #0F1C3312;">
                        <router-link :to="{ name: 'ProjectsDetails', params: { slug: project.slug } }">
                            <div class="flex justify-between items-start">
                                <div class="mb-4 pr-4">
                                    <h3 class="text-base md:text-lg lg:text-xl font-bold text-neutral-900 mb-3">
                                        {{ project.title }}
                                    </h3>
                                    <p class="text-neutral-600 text-sm line-clamp-1">
                                        {{ project.about_project }}
                                    </p>
                                </div>

                                <!-- Link to project details -->
                                <p
                                    class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="h-4 w-4 md:w-5 md:h-5 text-neutral-700 transform origin-center transition-transform duration-300 group-hover:-rotate-45 group-hover:text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </p>
                            </div>

                            <!-- Banner image -->
                            <div class="w-full h-auto lg:h-[290px] rounded-lg overflow-hidden">
                                <img :src="`/storage/${project.banner_image}`" :alt="project.title"
                                    class="w-full h-full rounded-lg object-cover mt-4" />
                            </div>
                        </router-link>
                    </article>

                </div>

                <!-- Empty state -->
                <div v-if="filteredProjects?.length === 0" class="text-center py-12">
                    <p class="text-neutral-500">No projects found in this category.</p>
                </div>
            </fwb-tab>
        </fwb-tabs>
    </div>
</template>

<script setup>
import { ref, computed } from "vue"
import { FwbTab, FwbTabs } from "flowbite-vue"
import { useFetch } from "@/composables/useFetch.js"

// Active tab state → default "all"
const activeTab = ref("all")

// Fetch categories from API
const { data: categories } = useFetch("/api/projects-categories")

//Add "All" tab and generate labels from name
const categoriesWithLabels = computed(() => {
    const apiCategories = (categories.value || []).map(c => ({
        ...c,
        label: c.name
    }))
    return [
        { id: null, name: "all", label: "All" },
        ...apiCategories
    ]
})



// Fetch projects
const { data: projects } = useFetch("/api/projects")

// Filter projects by active tab
const filteredProjects = computed(() => {
    if (!projects.value) return []
    if (activeTab.value === "all") {
        return projects.value
    }

    const selectedCategory = categoriesWithLabels.value.find(
        (c) => c.name === activeTab.value
    )

    if (!selectedCategory) {
        return projects.value
    }

    return projects.value.filter((p) => p.category_id === selectedCategory.id)
})
</script>