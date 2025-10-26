<template>
    <!-- Desktop Grid -->
    <div class="hidden sm:grid feature_grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
        <div v-for="(service, index) in services" :key="index" class="feature_grid_item">
            <img :src="service.icon" alt="" class="mb-3" />
            <h3 class="mb-4 text-xl font-bold text-neutral-900">{{ service.name }}</h3>
            <p class="text-sm leading-relaxed text-neutral-600 line-clamp-3">
                {{ service.content }}
            </p>
        </div>
    </div>

    <!-- Mobile Slider -->
    <div class="sm:hidden">
        <Swiper class="feature-slider px-4" :modules="[Autoplay, Pagination]" :slides-per-view="1" :space-between="16"
            :centered-slides="false" :loop="false" :autoplay="{
                delay: 2500,
                disableOnInteraction: false
            }" :pagination="{
                clickable: true
            }" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="(service, index) in services" :key="index">
                <article class="feature-card">
                    <img :src="service.icon" alt="" class="mb-1 h-9 w-9 object-contain" />
                    <h3 class="mb-2 text-base font-bold text-neutral-900">{{ service.name }}</h3>
                    <p class="text-sm leading-relaxed text-neutral-600 line-clamp-3">
                        {{ service.content }}
                    </p>
                </article>
            </SwiperSlide>

            <div class="swiper-pagination mt-6"></div>
        </Swiper>
    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Autoplay, Pagination } from 'swiper/modules'

import 'swiper/css'
import 'swiper/css/pagination'

const services = [
    {
        name: 'Design System Strategy',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/design_system.svg', import.meta.url).href,
    },
    {
        name: 'Full-Stack Expertise',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/full_stack.svg', import.meta.url).href,
    },
    {
        name: 'Tool-Agnostic Flexibility',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/tool_agnostic.svg', import.meta.url).href,
    },
    {
        name: 'Quality-Driven Development',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/quality_driven.svg', import.meta.url).href,
    },
    {
        name: 'Client-Centric Approach',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/client_centric.svg', import.meta.url).href,
    },
    {
        name: 'Comprehensive System Testing',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/comprehensive_system.svg', import.meta.url).href,
    },
]

const onSwiper = (swiper) => console.log(swiper)
const onSlideChange = () => console.log('slide change')
</script>

<style scoped>

:deep(.feature-slider .swiper-pagination-bullets) {
    display: flex;
    justify-content: center;
    align-items: center;
    /* gap: 10px; */
}

:deep(.feature-slider .swiper-pagination-bullet) {
    width: 8px;
    height: 8px;
    border-radius: 9999px;
    background-color: #e2e7f2;
    opacity: 1;
    transition: all 0.2s ease;
}

:deep(.feature-slider .swiper-pagination-bullet-active) {
    width: 26px;
    background-color: #0f172a;
}

.swiper-slide {
    height: 180px;
}
</style>
