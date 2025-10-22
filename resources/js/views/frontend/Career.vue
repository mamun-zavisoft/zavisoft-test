<template>

    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class=" pt-24 md:pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3 border-b border-neutral-200 mb-6 md:pb-8 lg:pb-12">
                    <div class="flex flex-col items-center gap-4 justify-center ">
                        <h1
                            class=" text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900">
                            Ready to level up? Join our <br> <span class="text-neutral-500 text-center">expanding team
                                now!</span>
                        </h1>
                        <p class="text-sm md:text-base text-neutral-600">Dreaming of a job where you can build cool
                            things and celebrate big wins?
                            You’re in the right spot!</p>
                        <a href="#"
                            class="mt-6 md:mt-8 px-4 py-2 bg-primary-500 text-white rounded-full hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 transition-colors duration-300">See
                            open positions</a>
                    </div>

                </div>
                <div class="mt-6 md:mt-8 lg:mt-12">
                    <span
                        class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                        Our values
                    </span>
                    <div class="flex flex-col md:flex-row gap-4  justify-between">
                        <div class="md:w-1/2">
                            <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                                We harmonize brand, culture, & experience to spark transformation.
                            </h2>
                        </div>
                        <p class="md:w-1/2 text-neutral-600 md:pt-2 text-sm lg:text-base">
                            We craft our approach around your project—carefully selecting methodologies based on what
                            the
                            task truly calls for.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">

                <!-- Middle Image -->
                <div class=" md:col-span-7">
                    <img src="https://images.unsplash.com/photo-1598256989800-fe5f95da9787?auto=format&fit=crop&w=800&q=80"
                        alt="Team celebrating" class="rounded-lg w-full h-auto " />
                </div>

                <!-- Right Stats -->
                <div class="md:col-span-5 flex flex-col gap-4 md:gap-10 lg:gap-16">
                    <div class="">
                        <div class="flex items-center gap-3">
                            <img src="@/assets/images/icons/mission_icon_1.svg" alt="">
                            <h3 class="text-3xl font-bold text-neutral-900">Driven by Purpose</h3>
                        </div>
                        <p class="mt-2 text-neutral-600 text-sm">
                            With a diverse client portfolio, we’re the go-to agency for all things digital.
                            <span class="font-medium text-neutral-900">Together, we’ll discover the perfect
                                solution.</span>
                        </p>
                    </div>

                    <div class="">
                        <div class="flex items-center gap-3">
                            <img src="@/assets/images/icons/mission_icon_2.svg" alt="">
                            <h3 class="text-3xl font-bold text-neutral-900">Huuuuuge Impact</h3>
                        </div>
                        <p class="mt-2 text-neutral-800 text-sm">
                            We know that the launch of a new digital product is just the start.
                            <span class="font-medium text-neutral-900">We’re with you every step, ensuring you have all
                                you
                                need for the journey.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 md:py-10 lg:py-12 bg-neutral-50">
        <div class="container">
            <div class="mb-4 md:mb-6 lg:mb-8">
                <span
                    class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                    Opening Positions
                </span>
                <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                    Be part of a team that's redefining the tech landscape and shaping tomorrow’s solutions.
                </h2>
            </div>
            <JobsCard />
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="border-b border-neutral-200 pb-8 md:pb-10 lg:pb-12">
                <h5 class=" text-base font-semibold text-neutral-900 text-center mb-3">Our recent clients & partners
                </h5>
                <PartnerMarquee />
                <PartnerMarquee :reverse="true" />
            </div>
        </div>
    </section>
    <section class=" py-8 md:py-10 lg:py-12">
        <div class="container">
            <FAQ />
        </div>
    </section>
</template>

<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import JobsCard from '@/components/ui/card/JobsCard.vue';
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';
import FAQ from '@/components/section/FAQ.vue';


</script>