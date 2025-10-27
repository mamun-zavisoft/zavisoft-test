<template>
    <section>
        <div class="heo relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div class=" pt-24 md:pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3">
                    <div class="flex flex-col items-center gap-4 justify-center ">
                        <h1
                            class=" text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900">
                            Have a project idea in mind? <br> <span class="text-neutral-500 text-center">Let's get
                                started.</span>
                        </h1>
                        <p class="text-sm md:text-base text-neutral-600">We create appealing, user-friendly designs that
                            help our clients delight the audience, increase brand awareness.</p>

                    </div>

                </div>
                <ContactCard />
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div>
                <h5 class=" text-base font-semibold text-neutral-900 text-center mb-3">Our recent clients & partners
                </h5>
                <PartnerMarquee />
                <PartnerMarquee :reverse="true" />
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12 bg-primary-50">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="h-full flex flex-col justify-between">
                    <div class="">
                        <span
                            class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-3">
                            Career opportunities
                        </span>
                        <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                            Maximize Your Software Development Potential with Us
                        </h2>
                        <p class="text-sm lg:text-base text-neutral-600 mt-6 md:mt-8 lg:mt-10">With our innovative
                            solutions and committed
                            expertise, success is a guaranteed outcome. Let’s
                            accelerate
                            together towards your goals—and beyond.
                            We are close-knit company that’s been committed from the start to forging our own path, not
                            simply
                            following modern management trends. For example, we don’t adopt Scrum by the book or through
                            standard
                            training, but instead, we focus on creating the ideal conditions to implement the best
                            practices.</p>
                    </div>
                    <div class="">
                        <NavigatePrimary text="Let’s join our team" to="/contact" class="mt-4 md:mt-6 lg:mt-8" />
                    </div>
                </div>
                <div class="pl-0 md:pl-6 lg:pl-8">
                    <img src="@/assets/images/career_img.png" alt=""
                        class="w-full h-auto rounded-tl-[50px] md:rounded-tl-[100px] lg:rounded-tl-[300px]">
                </div>
            </div>
        </div>
    </section>

</template>

<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';
import ContactCard from '@/components/ui/card/ContactCard.vue';



</script>