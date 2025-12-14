<template>
    <!-- Desktop Grid -->

    <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-x-6 gap-y-6">
        <div class="group relative wow animate__zoomIn animate__animated" v-for="team in teamMembers" :key="team.name">

            <img :src="team.image" :alt="team.name" class="w-full  h-[268px] object-cover" />
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-base md:text-lg text-neutral-900 font-bold">
                        {{ team.name }}
                    </h3>
                    <p class="mt-1 text-xs md:text-sm text-neutral-500">{{ team.designation }}</p>
                </div>

                <a v-if="team.linkedin" :href="team.linkedin" target="_blank" rel="noopener"
                    class="w-7 h-7 md:w-9 md:h-9 inline-flex items-center justify-center">
                    <img src="@/assets/images/icons/linkEdin.svg" alt="LinkedIn">
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Slider -->
    <div class="sm:hidden">
        <Swiper class="showcase-swiper" v-bind="swiperOptions" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="team in teamMembers" :key="team.name">
                <article>
                    <div class="group relative wow animate__zoomIn animate__animated">
                        <img :src="team.image" alt="" class="w-full max-h-60 object-contain" />
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-base md:text-lg text-neutral-900 font-bold">
                                    {{ team.name }}
                                </h3>
                                <p class="mt-1 text-xs md:text-sm text-neutral-500">{{ team.designation }}</p>
                            </div>

                            <a v-if="team.linkedin" :href="team.linkedin" target="_blank" rel="noopener"
                                class="w-7 h-7 md:w-9 md:h-9 inline-flex items-center justify-center">
                                <img src="@/assets/images/icons/linkEdin.svg" alt="LinkedIn">
                            </a>
                        </div>
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
import { ref, computed } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import { Autoplay, Pagination } from 'swiper/modules'

import { useFetch } from "@/composables/useFetch.js"
// Fetch team members from API
const { data: teamMembers } = useFetch("/api/team-members")


const totalSlides = teamMembers.length
const loopEnabled = totalSlides > 1

const swiperInstance = ref(null)
const currentSlide = ref(1)

const swiperOptions = computed(() => ({
    modules: [Autoplay, Pagination],
    slidesPerView: 1,
    spaceBetween: 24,
    loop: loopEnabled,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    breakpoints: {
        425: { slidesPerView: 1.5 },
        640: { slidesPerView: 2.5 },
        1024: { slidesPerView: 3 },
    },
    pagination: {
        clickable: true,
    },
}))

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

const swiperNext = () => swiperInstance.value?.slideNext()
const swiperPrev = () => swiperInstance.value?.slidePrev()

</script>

<style scoped>
.showcase-swiper {
    overflow: hidden;
    /* keep if you don't want overflow shadows */
}

/* If you actually want to SEE pagination bullets, remove this block */
.showcase-swiper :deep(.swiper-pagination) {
    display: none;
}
</style>
