<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div class="pt-26 border-b border-neutral-200 pb-8 lg:pb-12 ">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- Left: Content -->
                        <div class="h-full pr-0 lg:pr-10 xl:pr-14 ">
                            <div class="max-w-[809px] h-full flex flex-col justify-end pb-0 lg:pb-16">
                                <h1
                                    class="wow animate__animated animate__fadeInUp text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-neutral-900">
                                    {{ service?.heading }}
                                </h1>

                                <p
                                    class="wow animate__animated animate__fadeInUp mt-6 text-neutral-600 text-sm sm:text-base leading-relaxed">
                                    {{ service?.short_description }}
                                </p>
                                <div class="mt-6 md:mt-10 flex flex-col sm:flex-row gap-3 sm:gap-4">

                                    <a href="#"
                                        class="wow animate__animated animate__pulse sm:w-1/2 inline-flex items-center justify-center rounded-full px-4 py-3 bg-primary-500 text-white hover:bg-primary-600 focus:outline-none focus:ring-0 focus:ring-primary-300 transition-colors duration-300">
                                        Send a Brief
                                    </a>
                                    <a href="#"
                                        class="wow animate__animated animate__pulse sm:w-1/2 inline-flex items-center justify-center rounded-full px-4 py-3 bg-white border border-neutral-300 text-sm font-medium text-neutral-900  focus:outline-none focus:ring-0 focus:ring-transparent transition-colors duration-300">
                                        See UI/UX Projects
                                    </a>
                                </div>
                            </div>

                        </div>

                        <!-- Right: Visual -->
                        <div class="relative">
                            <div class="h-full w-full">
                                <div class="ml-0 lg:ml-10 xl:ml-16  lg:h-full flex items-center">
                                    <div class="mx-auto lg:ml-auto ">
                                        <div
                                            class="relative max-w-[632px] max-h-[540px] wow animate__animated animate__fadeInRight">
                                            <img :src="`/storage/${service?.service_image}`" :alt="service?.heading"
                                                class="block w-full h-full object-cover" loading="lazy" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-8 lg:pt-12">

                    <div class=" mb-4 md:mb-6 lg:mb-8">
                        <SectionHeader text="Turn your website into a showstopper" />
                        <h2
                            class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug wow animate__animated animate__fadeInUp">
                            Complex problems fuel
                            our creativity and passion. </h2>
                        <p class="text-sm lg:text-base text-neutral-600 mt-2 wow animate__animated animate__fadeInUp">
                            Combining human
                            aesthetics with functional design, we take a systematised approach to designing practical
                            and intuitive user interfaces.</p>
                    </div>
                    <ShowStopper />
                </div>
            </div>
        </div>

    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-0">
                <div class="col-span-12 md:col-span-6 lg:col-span-7">
                    <img src="@/assets/images/service_why_choose.svg" alt=""
                        class="wow animate__animated animate__fadeInLeft block w-full h-auto object-cover"
                        loading="lazy">
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-5 pl-0  lg:pl-8 h-full flex items-center">
                    <div class=" border border-neutral-200 p-4 rounded-lg">
                        <SectionHeader text="Why choose us" />
                        <h1 class="text-xl md:text-2xl lg:text-3xl font-bold wow animate__animated animate__fadeInUp">
                            Design side-by-side with your designer in
                            Figma — in real time.</h1>
                        <p
                            class="mt-4 md:mt-6 lg:mt-8 text-sm md:text-base text-neutral-600 wow animate__animated animate__fadeInUp">
                            With over years of
                            experience, Brand Vision takes pride in collaborating with exceptional businesses and
                            industries across the globe. These partnerships have enriched our expertise, sharpened our
                            skills, and enabled us to consistently enhance our services—delivering outstanding results
                            for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <SectionHeader text="Product show case" />
            <div class="flex flex-col md:flex-row gap-4 justify-between mb-8 md:mb-10 lg:mb-12">
                <div class="md:w-1/2">
                    <h2
                        class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug wow animate__animated animate__fadeInUp">
                        Explore a selection of our
                        <br>
                        most impactful UI/UX case studies.
                    </h2>
                </div>
                <p
                    class="wow animate__animated animate__fadeInUp md:w-1/2 text-neutral-600 md:pt-2 text-sm lg:text-base">
                    We specialize in custom software
                    development outsourcing, delivering high-quality, scalable, and efficient solutions to clients
                    worldwide. </p>
            </div>
            <Projects />
        </div>
    </section>


    <section class="pb-16 sm:pb-0 py-8 md:py-10 lg:py-12 bg-primary-50">
        <div class="container">
            <TestimonialSlider />
        </div>
    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="industry-focus lg:border-b border-neutral-200 pb-12">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16  justify-between">
                    <div class="lg:w-1/2">

                        <SectionHeader text="Industry Focus" />

                        <h1 class="wow animate__animated animate__fadeInUp text-2xl md:text-3xl lg:text-4xl font-bold">
                            Sectors Driving Our Expertise</h1>
                        <p
                            class="wow animate__animated animate__fadeInUp mt-4 md:mt-6 lg:mt-8 text-sm md:text-base text-neutral-600">
                            With over years of
                            experience, Brand Vision
                            takes pride in
                            collaborating with exceptional
                            businesses and industries across the globe. These partnerships have enriched our expertise,
                            sharpened our skills, and enabled us to consistently enhance our services—delivering
                            outstanding results for our clients.</p>
                        <NavigatePrimaryButton text="Let’s solve your issues" to="/contact"
                            class="wow animate__animated animate__fadeInUp mt-8 md:mt-12" />
                    </div>
                    <div class="lg:w-1/2 ">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 sm:gap-y-6 sm:gap-x-10 text-neutral-900 font-semibold">
                            <!-- Left Column -->
                            <div class="space-y-5">
                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/ecommerce.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">E-Commerce (B2C)</span>
                                </div>

                                <div
                                    class=" wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/entertainment.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Entertainment</span>
                                </div>

                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/tech.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Tech</span>
                                </div>

                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3  border-b border-neutral-200 pb-3 ">
                                    <img src="@/assets/images/icons/digital_marketing.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Digital Marketing</span>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-5">
                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/healthcare.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Healthcare</span>
                                </div>

                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/travel_tourism.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Travel & Tourism</span>
                                </div>

                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/education.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Education</span>
                                </div>

                                <div
                                    class="wow animate__animated animate__pulse flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/real_estate.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Real-Estate</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>
    <section class=" py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="border-b border-neutral-300 pb-12">
                <FAQ />
            </div>
        </div>
    </section>
    <section class=" pb-8 md:pb-10 lg:pb-12">
        <div class="container">
            <div class="mb-6">
                <SectionHeader text="Other Services" />
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold wow animate__animated animate__fadeInUp">Explore
                    other services</h1>
                <p class="mt-2 text-sm md:text-base text-neutral-600 wow animate__animated animate__fadeInUp">Pick your
                    self-paced career path and break into a
                    booming industry</p>
            </div>
            <div class="">
                <OtherServicce />
            </div>
        </div>
    </section>
</template>

<script setup>
import bgImg from '@/assets/images/about_bg.svg';
import ShowStopper from '@/components/section/ShowStopper.vue';
import TestimonialSlider from '@/components/ui/slider/TestimonialSlider.vue';
import StartBuilding from '@/components/section/StartBuilding.vue';
import FAQ from '@/components/section/FAQ.vue';
import SectionHeader from '@/components/ui/heading/SectionHeader.vue';
import Projects from '@/components/ui/card/Projects.vue';
import NavigatePrimaryButton from '@/components/ui/button/NavigatePrimary.vue';


import { ref, computed, onMounted, watchEffect } from "vue"
import OtherServicce from '@/components/section/OtherServicce.vue';
import { useRoute } from 'vue-router'

const route = useRoute()

// Get service category ID from route params
const id = computed(() => Number(route.params.id))

console.log("category id",id.value);

const service = ref({})

// Fetch service
const fetchService = async () => {
    try {
        const res = await fetch(`/api/category-wise-service/${id.value}`, {
            headers: { 'Accept': 'application/json' }
        })

        if (!res.ok) throw new Error("Failed to load service")

        const json = await res.json()

        // CHANGE: assign object directly
        service.value = json.data || {}

    } catch (e) {
        console.error("Error fetching service:", e)
    }
}

// When component loads → fetch data
onMounted(async () => {
    await fetchService()
})




</script>
