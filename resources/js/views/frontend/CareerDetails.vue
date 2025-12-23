<template>
    <section>
        <div class="hero relative w-full  mt-[-120px] pb-8 bg-neutral-50">
            <div class="container">
                <div class="pt-30 lg:pt-36 xl:pt-40">
                    <div class="grid grid-cols-1 md:grid-cols-12 lg:gap-12 gap-8">
                        <div class="md:col-span-7 lg:col-span-8">
                            <h2
                                class="wow animate__animated animate__fadeInUp text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                                {{ job.name ?? '' }}
                            </h2>
                            <p
                                class="wow animate__animated animate__fadeInUp text-sm md:text-base text-neutral-400 my-4">
                                Location</p>
                            <p class="wow animate__animated animate__fadeInUp text-base md:text-lg text-neutral-900">
                                {{ job.location_type }}· {{ job.type ?? '' }} | {{ formatExperience(job.experience) }}

                                <!-- {{ job.experience ?? '' }} year experience -->
                            </p>

                            <div class="flex flex-col gap-2">
                                <span
                                    class="w-fit wow animate__animated animate__fadeInUp mt-6 inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-white px-3 py-1 rounded-full mb-2">
                                    {{ job.salary_range ?? '' }} BDT/month
                                </span>
                                <!-- number of vacancies -->
                                <button class="w-fit px-4 py-1.5 font-medium bg-primary-500 text-white rounded-full">
                                    No of {{ job.vacancy > 1 ? 'Vacancies' : 'Vacancy' }} :
                                    {{ job.vacancy ?? '' }}
                                </button>
                            </div>
                        </div>
                        <div class="md:col-span-5 lg:col-span-4 mb-0 md:mb-[-62px]">
                            <div class="bg-white p-4 rounded-lg h-full border border-neutral-200 wow animate__animated animate__fadeInUp"
                                :style="{ boxShadow: '0px 3px 8px -2px #0F1C331A, 0px 2px 4px -4px #0F1C330A' }">
                                <p class="text-sm text-neutral-400 text-center">Ready to apply? We can't wait to meet
                                    you!</p>

                                <div class="mt-6 w-full h-[50px]">

                                    <router-link v-if="job.id" :to="{
                                        name: 'JobApply', params: { slug },
                                        state: { id: job.id }
                                    }" class="block w-full mt-6 px-4 py-3 bg-primary-500 text-white text-center rounded-full 
                                        hover:bg-primary-600 focus:outline-none focus:ring-0 
                                        focus:ring-primary-300 transition-colors duration-300">
                                        Apply Now
                                    </router-link>
                                </div>
                                <p class="text-sm text-neutral-400 text-center mt-10 pb-6">
                                    Next, you'll face an assessment to proceed. Apply for one job at a time and prepare
                                    well.

                                    * By applying for this job listing, you agree to our
                                    Data Privacy Policy for recruitment and job applications.
                                </p>
                                <div class=" border-t border-neutral-200 pt-6 flex gap-3 items-center justify-center">
                                    <h6> Share link</h6>
                                    <div class="flex items-center gap-2">
                                        <a href="https://www.facebook.com/zavisoft"
                                            class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center ">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 8 19">
                                                <path fill-rule="evenodd"
                                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="https://www.linkedin.com/company/zavisoft/"
                                            class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center">
                                            <img src="@/assets/images/icons/linkEdin.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <div class="lg:col-span-7 order-1 lg:order-1">
                    <div class=" career-lists ">
                        <div class="">
                            <h6
                                class="text-lg lg:text-xl text-neutral-900 font-semibold wow animate__animated animate__pulse">
                                Description</h6>
                            <div v-html="job.description" class="prose text-neutral-600 mt-3"></div>

                        </div>

                        <div class="mt-6">
                            <p
                                class="text-lg lg:text-xl text-neutral-900 font-semibold wow animate__animated animate__pulse">
                                Essential Requirement</p>

                            <!-- <p>{{ job.requirement ?? '' }}</p> -->
                            <div v-html="job.requirement" class="prose text-neutral-600 mt-3"></div>

                            <!-- <ul class="mt-3 pl-4  text-neutral-400 space-y-2 text-sm wow animate__animated animate__fadeInUp">
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Redesigned UI/UX to prioritize simplicity and efficiency
                        </li>
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Streamlined checkout flow for faster transactions
                        </li>
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Implemented responsive design for optimal mobile experience
                        </li>
                    </ul> -->
                        </div>
                        <div class="mt-6">
                            <p
                                class="text-lg lg:text-xl text-neutral-900 font-semibold wow animate__animated animate__pulse">
                                Your Key Responsibilities</p>

                            <!-- <ul class="mt-3 pl-4  text-neutral-400 space-y-2 text-sm wow animate__animated animate__fadeInUp">
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Redesigned UI/UX to prioritize simplicity and efficiency
                        </li>
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Streamlined checkout flow for faster transactions
                        </li>
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Implemented responsive design for optimal mobile experience
                        </li>
                    </ul> -->

                            <div v-html="job.responsibilities" class="prose text-neutral-600 mt-3"></div>
                        </div>
                        <div class="mt-6">
                            <p
                                class="text-lg lg:text-xl text-neutral-900 font-semibold wow animate__animated animate__pulse">
                                Why Join Zavisoft</p>

                            <div v-html="job.about_company" class="prose text-neutral-600 mt-3"></div>

                            <!-- <ul class="mt-3 pl-4  text-neutral-400 space-y-2 text-sm wow animate__animated animate__fadeInUp">
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Redesigned UI/UX to prioritize simplicity and efficiency
                        </li>
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Streamlined checkout flow for faster transactions
                        </li>
                        <li class="relative list-none pl-4
                            before:content-[''] before:absolute before:-left-2 before:top-2
                            before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                            Implemented responsive design for optimal mobile experience
                        </li>
                    </ul> -->
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 order-2 lg:order-2">

                    <div v-if="basic_benefits?.length > 0"
                        class="basic-benefit bg-white lg:pl-10 md:pl-5 pl-0 md:mt-5 lg:mt-10">
                        <h1 class="text-lg lg:text-xl text-neutral-900 font-semibold mb-6">
                            Basics & Benefits
                            <CheckIcon />
                        </h1>
                        <ul class="space-y-4 ">
                            <li v-for="benefit in basic_benefits" :key="benefit.id" class="flex gap-4">
                                <div class="icon w-4 h-4 flex-shrink-0 overflow-hidden mt-1.5">
                                    <img v-if="benefit.icon_url" :src="benefit.icon_url"
                                        :alt="benefit.short_description" class="w-full h-full object-cover"
                                        @error="handleImageError($event)" />
                                    <CheckCircleIcon v-else class="w-full h-full text-neutral-700 text-base" />
                                </div>
                                <p class="text-neutral-700 text-base">
                                    {{ benefit.short_description }}
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useFetch } from "@/composables/useFetch.js"
import { CheckCircleIcon } from "@heroicons/vue/24/outline"

// Fetch team members from API
const { data: basic_benefits } = useFetch("/api/benefits")
import { useRoute } from 'vue-router'

const route = useRoute()
const slug = route.params.slug

const job = ref({})
const loading = ref(true)
const error = ref(null)

const loadJob = async () => {
    try {
        const res = await fetch(`/api/careers/${slug}`)

        if (!res.ok) throw new Error('Job not found')

        const json = await res.json()
        job.value = json.data
    } catch (e) {
        error.value = e.message
    } finally {
        loading.value = false
    }
}

onMounted(loadJob)

const formatExperience = (exp) => {
    if (!exp) return ""
    if (exp.includes('-')) {
        return `${exp} years experience`
    }
    return `${exp} ${exp === "1" || exp === 1 ? "year" : "years"} experience`
}

</script>