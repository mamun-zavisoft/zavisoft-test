<template>
    <div class=" relative">

        <div class="mb-4 md:mb-6 lg:mb-8 flex items-center justify-between">
            <img src="@/assets/images/icons/qute.svg" alt="quote" class="w-20 md:w-24 lg:w-28 h-auto" />
            <div
                class="flex items-center justify-center md:justify-end absolute mt-10 sm:mt-0 sm:static bottom-[-40px] right-0 z-20 ">
                <button type="button" @click="swiperPrev"
                    class="flex w-7 h-7 md:w-8 md:h-8 lg:h-10 lg:w-10 items-center justify-center rounded-full border border-neutral-300 bg-white transition hover:bg-neutral-100 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3 lg:w-4 lg:h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <span class="text-xs lg:text-sm text-neutral-500 w-[50px] text-center tabular-nums">
                    {{ paddedCurrent }}/{{ paddedTotal }}
                </span>
                <button type="button" @click="swiperNext"
                    class="flex w-7 h-7 md:w-8 md:h-8 lg:h-10 lg:w-10 items-center justify-center rounded-full bg-neutral-900 text-white transition hover:bg-neutral-700 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3 lg:w-4 lg:h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>

        <Swiper :modules="[Autoplay]" :space-between="30" :slides-per-view="1" :loop="true"
            :autoplay="autoplay ? { delay: 4000 } : false" class="testimonial-swiper" @swiper="onSwiper"
            @slideChange="onSlideChange">
            <SwiperSlide v-for="(t, i) in testimonials" :key="i">
                <div class="w-[100%] md:w-[80%] mr-auto">
                    <p class="text-xl md:text-2xl lg:text-3xl text-neutral-800 font-semibold line-clamp-3">
                        {{ t.quote }}
                    </p>
                    <div class="flex items-center gap-3 mt-6">
                        <img :src="t.image" class="w-10 h-10 rounded-full object-cover" :alt="t.name" />
                        <div>
                            <p class="font-semibold text-gray-900">{{ t.name }}</p>
                            <p class="text-sm text-gray-600">{{ t.position }}</p>
                        </div>
                    </div>
                </div>
            </SwiperSlide>
        </Swiper>


    </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Autoplay } from 'swiper/modules'
import 'swiper/css'

const autoplay = true

const testimonials = [
    {
        quote:
            "Exceptional strategy! This company truly gets our needs and delivers with accuracy. We're thankful for the strong, positive impact they've had on our business.",
        name: 'Richard Aurora',
        position: 'Project Manager at Skyscanner',
        image: 'https://randomuser.me/api/portraits/men/11.jpg',
    },
    {
        quote:
            'Working with them has been a fantastic experience. The design and strategy helped our business grow efficiently.',
        name: 'Sophia Turner',
        position: 'Marketing Lead at BrightCo',
        image: 'https://randomuser.me/api/portraits/women/45.jpg',
    },
    {
        quote:
            'Professional, creative, and always on time. Highly recommended for anyone looking for quality work.',
        name: 'James Lee',
        position: 'CEO at NextTech',
        image: 'https://randomuser.me/api/portraits/men/35.jpg',
    },
]

// --- Swiper control + counter (works with loop: true) ---
const swiperRef = ref(null)
const currentSlide = ref(1) // 1-based
const totalSlides = ref(testimonials.length)

const onSwiper = (swiper) => {
    swiperRef.value = swiper
    currentSlide.value = swiper.realIndex + 1
}

const onSlideChange = (swiper) => {
    currentSlide.value = swiper.realIndex + 1
}

const swiperNext = () => swiperRef.value?.slideNext()
const swiperPrev = () => swiperRef.value?.slidePrev()

const paddedCurrent = computed(() => String(currentSlide.value).padStart(2, '0'))
const paddedTotal = computed(() => String(totalSlides.value).padStart(2, '0'))
</script>
