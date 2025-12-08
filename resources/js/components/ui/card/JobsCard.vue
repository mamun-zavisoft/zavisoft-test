<template>
    <!-- // show not found if jobListings is empty -->
    <div v-if="jobListings.length === 0">
        <div class="bg-red-100 text-red-800 text-sm font-medium  px-8 py-3 rounded flex items-center justify-center">
            <h1 class="text-xl"> Available jobs not found</h1>
        </div>
    </div>

    <!-- Desktop Grid -->
    <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <article v-for="job in jobListings" :key="job.id">
            <router-link :to="{ name: 'CareerDetails', params: { id: job.id } }"
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
                <p class="mt-2 text-neutral-500 text-xs  lg:text-sm group-hover:text-white">{{
                    formatExperience(job.experience) }}</p>
                <div class="mt-6 md:mt-8 lg:mt-10">
                    <span
                        class="inline-flex items-center rounded-full bg-neutral-100 px-4 py-2 text-neutral-800 text-xs lg:text-sm font-medium">
                        {{ job.salaryRange }} BDT/month
                    </span>
                </div>
                <div class="mt-4">
                    <p
                        class="group flex items-center gap-2 text-neutral-900 font-semibold text-sm group-hover:text-white">
                        Details
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>

                    </p>
                </div>
            </router-link>
        </article>
    </div>

    <!-- Mobile Slider -->
    <div class="sm:hidden">
        <Swiper class="opertunity-swiper" v-bind="swiperOptions" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="job in jobListings" :key="job.id">
                <router-link :to="{ name: 'CareerDetails', params: { id: job.id } }">
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
                        <p class="mt-2 text-neutral-500 text-xs  lg:text-sm group-hover:text-white">{{
                            formatExperience(job.experience) }}</p>
                        <div class="mt-6 md:mt-8 lg:mt-10">
                            <span
                                class="inline-flex items-center rounded-full bg-neutral-100 px-4 py-2 text-neutral-800 text-xs lg:text-sm font-medium">
                                {{ job.salaryRange }} BDT/month
                            </span>
                        </div>
                        <div class="mt-4">
                            <p
                                class="group flex items-center gap-2 text-neutral-900 font-semibold text-sm group-hover:text-white">
                                Details
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </p>
                            <!-- <a href="#" target="_blank" rel="noopener"
                                class="group flex items-center gap-2 text-neutral-900 font-semibold text-sm group-hover:text-white">


                            </a> -->
                        </div>
                    </article>
                </router-link>

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
import { ref, computed, onMounted } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import { Autoplay, Pagination } from 'swiper/modules'


const jobListings = ref([])

const loadJobs = async () => {
    try {
        const res = await fetch('/api/careers')

        if (!res.ok) {
            throw new Error('Network response was failed')
        }

        const json = await res.json()
        const jobs = json.data

        jobListings.value = jobs
            .sort((a, b) => new Date(b.created_at) - new Date(a.created_at))
            .map(job => ({
                id: job.id,
                title: job.name,
                type: job.location_type ?? "On Site",
                employment: job.type ?? "Full Time",
                experience: job.experience,
                salaryRange: job.salary_range,
            }))

    } catch (e) {
        console.error("Failed to load jobs", e)
    }
}

onMounted(loadJobs)

const formatExperience = (exp) => {
    if (!exp) return ""
    if (exp.includes('-')) {
        return `${exp} years experience`
    }
    return `${exp} ${exp === "1" || exp === 1 ? "year" : "years"} experience`
}


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
