<template>
    <section>
        <div class="heo relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div class="pt-30 lg:pt-36 xl:pt-40 ">
                    <div class="flex flex-col gap-4 md:mb-2 mb-0 lg:mb-4 ">
                        <h1
                            class="wow animate__animated animate__fadeInUp text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-neutral-900">
                            Have a project idea in mind? <br> <span class="text-neutral-500 text-center">Let's get
                                started.</span>
                        </h1>
                        <p class="mt-2 wow animate__animated animate__fadeInUp text-sm md:text-base text-neutral-600">We
                            create appealing, user-friendly designs that
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
                <h5
                    class=" text-base font-semibold text-neutral-900 text-center mb-3 wow animate__animated animate__fadeInUp">
                    Our recent clients & partners
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
                    <div class="wow animate__animated animate__fadeInUp">
                        <SectionHeader text="Career opportunities" />
                        <h2
                            class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug wow animate__animated animate__fadeInUp">
                            Maximize Your Software Development Potential with Us
                        </h2>
                        <p
                            class="text-sm lg:text-base text-neutral-600 mt-6 md:mt-8 lg:mt-10 wow animate__animated animate__fadeInUp">
                            With our innovative
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
                        <NavigatePrimary text="Let’s join our team" to="/contact"
                            class="mt-4 md:mt-6 lg:mt-8 wow animate__animated animate__fadeInUp" />
                    </div>
                </div>
                <div class="pl-0 md:pl-6 lg:pl-8 wow animate__animated animate__fadeInRight">
                    <img src="@/assets/images/career_img.png" alt=""
                        class="w-full h-auto rounded-tl-[50px] md:rounded-tl-[100px] lg:rounded-tl-[300px] " />
                </div>
            </div>
        </div>
    </section>

</template>

<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';
import ContactCard from '@/components/ui/card/ContactCard.vue';
import SectionHeader from '@/components/ui/heading/SectionHeader.vue';
import NavigatePrimary from '@/components/ui/button/NavigatePrimary.vue';



</script>