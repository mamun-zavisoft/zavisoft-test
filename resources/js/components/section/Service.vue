<template>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
        <div v-for="service in services" :key="service.id" class="bg-white rounded-lg  p-4 transition group">
            <router-link :to="{
                name: 'serviceDetails',
                params: {
                    slug: service.category.slug
                }
            }">

                <div class="flex justify-between items-start mb-4 wow animate__zoomIn animate__animated">
                    <div class="mb-4 pr-4">
                        <h3 class="text-xl font-bold text-neutral-900 mb-3 line-clamp-1">{{ service?.heading }}</h3>
                        <p class="text-neutral-600 text-sm line-clamp-2">{{ service?.short_description }}
                        </p>
                    </div>

                    <p
                        class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-5 h-5 text-neutral-700 transform origin-center transition-transform  duration-300 group-hover:-rotate-45 group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </p>
                </div>

                <div class="w-full h-auto lg:h-[200px] rounded-lg overflow-hidden">
                    <img :src="`/storage/${service?.service_image}`" :alt="service?.heading"
                        class="w-full h-full rounded-lg object-cover mt-4" />
                </div>

            </router-link>
        </div>
    </div>

</template>

<script setup>
import { useFetch } from "@/composables/useFetch"

const { data: services, loading, error } = useFetch("/api/services")


</script>