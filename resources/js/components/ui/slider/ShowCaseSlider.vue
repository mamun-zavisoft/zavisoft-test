<template>
    <div class="container">
        <Swiper class="showcase-swiper" :modules="[Autoplay, Pagination]" :slides-per-view="1" :space-between="24"
            :loop="loopEnabled" :autoplay="{
                delay: 3500,
                disableOnInteraction: false
            }" :breakpoints="{
                575: { slidesPerView: 1.2 },
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }" :pagination="{
                clickable: true
            }" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="(item, index) in showcaseItems" :key="index">
                <article>
                    <div class="bg-white rounded-lg  p-4 transition group border border-transparent hover:border-primary-500"
                        style="box-shadow: 0px 2px 4px 0px #0F1C330F, 0px 2px 2px 0px #0F1C3312;">
                        <div class="flex justify-between items-start">
                            <div class="mb-4 pr-4">
                                <h3 class="text-lg md:text-xl font-bold text-neutral-900 mb-3">{{ item.title }}</h3>
                                <p class="text-neutral-600 text-sm line-clamp-3">{{ item.description }}
                                </p>
                            </div>

                            <a href="#"
                                class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="h-4 w-4 md:w-5 md:h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                        <ul class="flex flex-wrap gap-2">
                            <li class="px-3 py-1 bg-neutral-100 text-neutral-900 text-xs rounded-full">
                                All
                            </li>
                        </ul>
                        <img :src="item.image" alt={{item.title}} class="w-full rounded-lg object-cover mt-4" />
                    </div>
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
        title: 'Packly',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['e-commerce'],
        image: new URL('@/assets/images/project_3.png', import.meta.url).href,

    },
    {
        title: 'Packly - Super App',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['e-commerce'],
        image: new URL('@/assets/images/project_2.png', import.meta.url).href,


    },
    {
        title: 'Packly - Event',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_1.png', import.meta.url).href,


    },
    {
        title: 'Packly - Shopping',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_3.png', import.meta.url).href,


    },
    {
        title: 'Packly - Kaj',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_2.png', import.meta.url).href,


    },
    {
        title: 'Packly - Zavisoft',
        description: 'Our design team helps clients achieve their marketing and business goals.',
        tags: ['Ticket Management', 'Ticket Platform Website'],
        image: new URL('@/assets/images/project_1.png', import.meta.url).href,

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
