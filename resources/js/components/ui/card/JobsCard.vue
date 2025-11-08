<template>
    <!-- Desktop Grid -->
    <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <article
            class="wow animate__zoomIn animate__animated group bg-white p-3 md:p-4 rounded transition-colors duration-300 hover:bg-primary-500 hover:text-white"
            v-for="job in jobListings" :key="job.id">

            <div
                class="inline-flex items-center gap-1 rounded-full bg-primary-50 text-primary-500 px-3 py-1 text-sm font-medium">
                <span>{{ job.type }}</span>
                <span class="text-primary-500">•</span>
                <span>{{ job.employment }}</span>
            </div>
            <h1 class="mt-4 text-base md:text-lg font-bold  text-neutral-900 group-hover:text-white">
                {{ job.title }}
            </h1>
            <p class="mt-2 text-neutral-500 text-xs  lg:text-sm group-hover:text-white">{{ job.experience }}</p>
            <div class="mt-6 md:mt-8 lg:mt-10">
                <span
                    class="inline-flex items-center rounded-full bg-neutral-100 px-4 py-2 text-neutral-800 text-xs lg:text-sm font-medium">
                    {{ job.salaryRange }}
                </span>
            </div>
            <div class="mt-4">
                <router-link :to="{ name: 'CareerDetails', params: { id: job.id } }"
                    class="group flex items-center gap-2 text-neutral-900 font-semibold text-sm group-hover:text-white">
                    Details
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>

                </router-link>
            </div>
        </article>
    </div>

    <!-- Mobile Slider -->
    <div class="sm:hidden">
        <Swiper class="opertunity-swiper" v-bind="swiperOptions" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="job in jobListings" :key="job.id">
                <article
                    class="wow animate__zoomIn animate__animated group bg-white p-3 md:p-4 rounded transition-colors duration-300 hover:bg-primary-500 hover:text-white">

                    <div
                        class="inline-flex items-center gap-1 rounded-full bg-primary-50 text-primary-500 px-3 py-1 text-sm font-medium">
                        <span>{{ job.type }}</span>
                        <span class="text-primary-500">•</span>
                        <span>{{ job.employment }}</span>
                    </div>
                    <h1 class="mt-4 text-base md:text-lg font-bold  text-neutral-900 group-hover:text-white">
                        {{ job.title }}
                    </h1>
                    <p class="mt-2 text-neutral-500 text-xs  lg:text-sm group-hover:text-white">{{ job.experience }}</p>
                    <div class="mt-6 md:mt-8 lg:mt-10">
                        <span
                            class="inline-flex items-center rounded-full bg-neutral-100 px-4 py-2 text-neutral-800 text-xs lg:text-sm font-medium">
                            {{ job.salaryRange }}
                        </span>
                    </div>
                    <div class="mt-4">
                        <a v-if="job.link" :href="job.link" target="_blank" rel="noopener"
                            class="group flex items-center gap-2 text-neutral-900 font-semibold text-sm group-hover:text-white">
                            Details
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>

                        </a>
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

const jobListings = [
    {
        id: 1,
        title: "WordPress Developer",
        type: "Onsite",
        employment: "Full Time",
        experience: "1–2 year experience",
        salaryRange: "৳20,000 – ৳30,000 BDT/month",
    },
    {
        id: 2,
        title: "Frontend Developer (React)",
        type: "Remote",
        employment: "Full Time",
        experience: "2–3 year experience",
        salaryRange: "৳40,000 – ৳60,000 BDT/month",
        link: "#",
    },
    {
        id: 3,
        title: "Flutter App Developer",
        type: "Hybrid",
        employment: "Part Time",
        experience: "1–2 year experience",
        salaryRange: "৳25,000 – ৳40,000 BDT/month",
        link: "#",
    },
    {
        id: 4,
        title: "Flutter App Developer",
        type: "Hybrid",
        employment: "Part Time",
        experience: "1–2 year experience",
        salaryRange: "৳25,000 – ৳40,000 BDT/month",
        link: "#",
    },
    {
        id: 5,
        title: "Flutter App Developer",
        type: "Hybrid",
        employment: "Part Time",
        experience: "1–2 year experience",
        salaryRange: "৳25,000 – ৳40,000 BDT/month",
        link: "#",
    },
    {
        id: 6,
        title: "Flutter App Developer",
        type: "Hybrid",
        employment: "Part Time",
        experience: "1–2 year experience",
        salaryRange: "৳25,000 – ৳40,000 BDT/month",
        link: "#",
    },
];


const totalSlides = jobListings.length
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
.opertunity-swiper {
    overflow: hidden;
    /* keep if you don't want overflow shadows */
}

/* If you actually want to SEE pagination bullets, remove this block */
.opertunity-swiper :deep(.swiper-pagination) {
    display: none;
}
</style>
