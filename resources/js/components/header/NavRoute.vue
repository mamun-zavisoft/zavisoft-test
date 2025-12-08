<template>

    <nav class="text-sm flex flex-col border-b lg:border-b-0 border-neutral-200 pb-1 px-2 mt-3 " role="menu">
        <h3 class="px-4 md:px-4 pt-3 text-sm font-semibold text-neutral-500 uppercase">Our Services</h3>
        <div
            class="grid grid-cols-1 md:grid-cols-2 gap-y-0 md:gap-x-10 lg:gap-x-16 py-3 text-sm md:text-base text-neutral-900 font-medium">
            <router-link v-for="(service, index) in services" :key="index" :to="{
                name: 'serviceDetails',
                params: {
                    id: service.id,
                     slug: service.slug || slugify(service.name)
                }
            }" class="group px-3 md:px-4 py-2 md:py-3 rounded flex items-center justify-between hover:bg-neutral-50"
                role="menuitem">
                <div class="flex items-center gap-2 justify-center">
                    <span class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 bg-neutral-50 p-2 rounded">
                        <img :src="service.icon" :alt="service.name" />
                    </span>
                    {{ service.name }}
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5 md:w-6 md:h-6 group-hover:stroke-primary-500 transition-colors duration-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>

            </router-link>

        </div>
    </nav>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import { slugify } from "@/composables/slugify"


const serviceData = ref([])
const isLoading = ref(true)

const loadServices = async () => {
    try {
        const res = await fetch('/api/service-categories')
        if (!res.ok) throw new Error('Network response failed')

        const json = await res.json()
        const apiServices = json.data || json

        serviceData.value = apiServices.map(service => ({ 
            id: service.id,
            name: service.name,
            icon: service.icon_url
        })) 
    } catch (e) {
        console.error("Failed to load services", e)
    } finally {
        isLoading.value = false
    }
}

const createSlug = (name) => {
    return name.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]+/g, '')
}

// Predefined icons for specific positions
const predefinedIcons = [
    new URL('@/assets/images/icons/ui_ux.svg', import.meta.url).href,
    new URL('@/assets/images/icons/software.svg', import.meta.url).href,
    new URL('@/assets/images/icons/web.svg', import.meta.url).href,
    new URL('@/assets/images/icons/mobile.svg', import.meta.url).href,
    new URL('@/assets/images/icons/testing.svg', import.meta.url).href,
    new URL('@/assets/images/icons/software.svg', import.meta.url).href // default for 6th
]

// Create the final services array (max 6 items)
const services = computed(() => {
    const result = []

    // Use actual data from API
    serviceData.value.forEach((service, index) => {
        if (index < 6) { // Limit to 6 items
            result.push({
                id: service.id,
                name: service.name,
                icon: service.icon || predefinedIcons[index] || predefinedIcons[5],
                // link: `/services/${service.slug}`
            })
        }
    })

    // If we have less than 6 items, add fallback ones
    if (result.length < 6) {
        const fallbackServices = [
            { name: 'UI/UX Design', slug: 'ui-ux-design' },
            { name: 'Software Dev', slug: 'software-development' },
            { name: 'Web Development', slug: 'web-development' },
            { name: 'Mobile Apps', slug: 'mobile-apps' },
            { name: 'QA Testing', slug: 'qa-testing' },
            { name: 'Consulting', slug: 'consulting' }
        ]

        for (let i = result.length; i < 6; i++) {
            const fallback = fallbackServices[i - result.length]
            result.push({
                name: fallback.name, 
                icon: predefinedIcons[i],
                link: `/services/${fallback.slug}`
            })
        }
    }

    return result
})

onMounted(loadServices)

</script>
