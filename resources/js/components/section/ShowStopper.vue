<template>
    <!-- Desktop Grid -->
    <div class="hidden sm:grid  grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-6 gap-x-8 lg:gap-x-10 xl:gap-x-16">
        <div v-for="(service, index) in services" :key="index">
            <img :src="service.icon" alt="" class="mb-3 wow animate__animated animate__fadeInUp" />
            <h3 class="mb-4 md:text-base lg:text-lg font-bold text-neutral-900 wow animate__animated animate__fadeInUp">
                {{ service.name }}</h3>
            <p class="text-sm leading-relaxed text-neutral-600 line-clamp-3 wow animate__animated animate__fadeInUp">
                {{ service.content }}
            </p>
        </div>
    </div>

    <!-- Mobile Slider -->
    <div class="sm:hidden">
        <Swiper class="feature-slider px-4" :modules="[Autoplay, Pagination]" :slides-per-view="1.2" :space-between="16"
            :centered-slides="false" :loop="false" :autoplay="{
                delay: 2500,
                disableOnInteraction: false
            }" :pagination="{
                clickable: true
            }" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="(service, index) in services" :key="index">
                <article class="feature-card">
                    <img :src="service.icon" alt="" class="mb-3 wow animate__animated animate__fadeInUp" />
                    <h3
                        class="mb-4 md:text-base lg:text-lg font-bold text-neutral-900 wow animate__animated animate__fadeInUp">
                        {{ service.name }}</h3>
                    <p
                        class="text-sm leading-relaxed text-neutral-600 line-clamp-3 wow animate__animated animate__fadeInUp">
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
        name: 'User-Centered Design Approach',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/user_centered_design_approach.svg', import.meta.url).href,
    },
    {
        name: 'Conversion-Focused Interfaces',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/conversion_focused .svg', import.meta.url).href,
    },
    {
        name: 'Research-Driven Strategy',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/research_driven_strategy.svg', import.meta.url).href,
    },
    {
        name: 'Modern, Scalable UI Design',
        content:
            'We create cohesive and scalable design systems that ensure consistency, usability, and a seamless user experience across all digital products.',
        icon: new URL('@/assets/images/icons/modern_scalable.svg', import.meta.url).href,
    },

]

const onSwiper = () => { }
const onSlideChange = () => { }
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
