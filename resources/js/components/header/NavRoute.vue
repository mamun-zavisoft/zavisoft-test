<template>
    <nav class="text-sm flex flex-col border-b lg:border-b-0 border-neutral-200 pb-1 px-2 mt-3" role="menu">
        <h3 class="px-4 md:px-4 pt-3 text-sm font-semibold text-neutral-500 uppercase">Our Services</h3>
        
        <!-- Skeleton loader for instant perceived load -->
        <div v-if="loading" class="grid grid-cols-1 md:grid-cols-2 gap-y-0 md:gap-x-10 lg:gap-x-16 py-3">
            <div v-for="n in 6" :key="n" class="px-3 md:px-4 py-2 md:py-3 rounded flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 bg-neutral-100 animate-pulse rounded p-2"></div>
                    <div class="h-4 bg-neutral-100 animate-pulse rounded w-20"></div>
                </div>
                <div class="w-5 h-5 bg-neutral-100 animate-pulse rounded"></div>
            </div>
        </div>

        <!-- Error state (simple fallback) -->
        <div v-else-if="error" class="py-3 text-center text-neutral-500">
            Failed to load services. <button @click="$emit('retry')" class="text-primary-500 underline">Retry</button>
        </div>

        <!-- Actual content -->
        <div v-else-if="serviceData?.length" 
             class="grid grid-cols-1 md:grid-cols-2 gap-y-0 md:gap-x-10 lg:gap-x-16 py-3 text-sm md:text-base text-neutral-900 font-medium">
            <router-link v-for="(service, index) in serviceData" :key="index" :to="{
                name: 'serviceDetails',
                params: { slug: service.slug }
            }" class="group px-3 md:px-4 py-2 md:py-3 rounded flex items-center justify-between hover:bg-neutral-50"
                role="menuitem">
                <div class="flex items-center gap-2 justify-center">
                    <span class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 bg-neutral-50 p-2 rounded">
                        <img :src="service.icon" :alt="service.name" class="w-full h-full object-contain" />
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

        <!-- Empty state -->
        <div v-else class="py-3 text-center text-neutral-500">No services available.</div>
    </nav>
</template>

<script setup>
defineProps({
    serviceData: { type: Array, default: () => [] },
    loading: { type: Boolean, default: false },
    error: { type: [String, null], default: null }
})

defineEmits(['retry'])
</script>