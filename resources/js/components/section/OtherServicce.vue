<template>
    <div>
        <Swiper class="showcase-swiper" :modules="[Autoplay, Pagination]" :slides-per-view="1.2" :space-between="16"
            :loop="loopEnabled" :autoplay="{ delay: 3500, disableOnInteraction: false }" :breakpoints="{
                575: { slidesPerView: 1.2, spaceBetween: 16 },
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 24 }
            }" :pagination="{
                clickable: true
            }" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="(item, index) in showcaseItems" :key="index" class="py-2">
                <article class="bg-neutral-50 rounded-lg  p-4 h-full">
                    <img :src="item.icon" alt="" class="mb-1 h-9 w-9 object-contain" />
                    <h3 class="mb-2 text-[15px] font-bold text-neutral-900">{{ item.name }}</h3>
                    <p class="text-sm leading-relaxed text-neutral-600 line-clamp-3">
                        {{ item.content }}
                    </p>
                </article>
            </SwiperSlide>
        </Swiper>

        <div class="mt-4 flex items-center justify-center gap-4">
            <button type="button" @click="swiperPrev"
                class="flex h-10 w-10 items-center justify-center rounded-full border border-neutral-300 text-neutral-600 transition hover:bg-neutral-100 hover:text-neutral-900 cursor-pointer">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>

            </button>
            <span class="text-sm text-neutral-500">
                {{ currentSlide }}/{{ totalSlides }}
            </span>
            <button type="button" @click="swiperNext"
                class="flex h-10 w-10 items-center justify-center rounded-full bg-neutral-900 text-white transition hover:bg-neutral-700 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>

            </button>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import { Autoplay, Pagination } from 'swiper/modules'

const showcaseItems = [
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

const totalSlides = showcaseItems.length
const loopEnabled = totalSlides > 1

const currentSlide = ref(1)
const swiperInstance = ref(null)

const updateCurrentSlide = (instance) => {
    if (!instance) return
    const baseIndex = loopEnabled ? instance.realIndex : instance.activeIndex
    currentSlide.value = ((baseIndex % totalSlides) + totalSlides) % totalSlides + 1
}

const onSwiper = (instance) => {
    swiperInstance.value = instance
    updateCurrentSlide(instance)
}

const onSlideChange = (instance) => {
    updateCurrentSlide(instance)
}

const swiperNext = () => {
    swiperInstance.value?.slideNext()
}

const swiperPrev = () => {
    swiperInstance.value?.slidePrev()
}
</script>

<style scoped>
.showcase-swiper {
    overflow: hidden;
}

.showcase-swiper :deep(.swiper-pagination) {
    display: none;
}
</style>
