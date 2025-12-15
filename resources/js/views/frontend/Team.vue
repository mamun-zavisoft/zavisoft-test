<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div class="pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3">
                    <div v-if="CEO" class="flex flex-col sm:flex-row gap-4 md:gap-6 lg:gap-8 xl:gap-12 w-full">
                        <div class="w-full sm:w-[340px] flex-shrink-0 wow animate__animated animate__fadeInLeft">
                            <div class="card" >
                                <div class="card-image">
                                    <img :src="CEO.image || '@/assets/images/zionbhai.svg'" :alt="CEO.name"
                                        class="w-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-base md:text-lg text-neutral-900 font-bold">
                                            {{ CEO.name }}
                                        </h3>
                                        <p class="mt-1 text-xs md:text-sm text-neutral-500">{{ CEO.designation }}
                                        </p>
                                    </div>

                                    <a v-if="CEO.linkedin" :href="CEO.linkedin" target="_blank" rel="noopener" class="w-7 h-7 md:w-9 md:h-9 inline-flex items-center justify-center">
                                        <img src="@/assets/images/icons/linkEdin.svg" alt="LinkedIn">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:flex-1">
                            <h1 class="text-3xl md:text-4xl lg:text-5xl 2xl:text-6xl font-semibold text-neutral-900">Our
                            {{ CEO.title }}   
                            </h1>
                            <p class="mt-5 lg:mt-6 text-sm md:text-lg text-neutral-500">
                                {{ CEO.short_description }}
                            </p>

                            <div class="mt-5">
                                <NavigatePrimary to="/contact" text="Team Behind Us" />
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="container">
                <div class="mt-6 md:mt-8 lg:mt-10 ">
                    <TeamMemberCard />
                </div>
            </div>
        </div>



    </section>

    <section class=" py-8 md:py-10 lg:py-12">
        <div class="container">
            <SectionHeader text="Our Vision & Mission" />
            <div class="flex flex-col md:flex-row gap-8  justify-between mb-4 md:mb-6 lg:mb-8">
                <div class="md:w-1/2 ">
                    <h2
                        class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug wow animate__animated animate__fadeInUp">
                        We combine brand, culture, and experience to create impact both within and beyond an
                        organization.
                    </h2>
                </div>
                <p
                    class="md:w-1/2 text-neutral-600 md:pt-2 text-sm lg:text-base wow animate__animated animate__fadeInUp">
                    We are the best custom software development company for custom software development outsourcing. And
                    we provide robust, scalable, and efficient solutions to various clients around the world
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">

                <!-- Middle Image -->
                <div class=" md:col-span-7 wow animate__animated animate__fadeInLeft">
                    <img src="@/assets/images/about_3.png" alt="Team celebrating"
                        class="rounded-lg w-full h-auto object-cover shadow-md" />
                </div>

                <!-- Right Stats -->
                <div class=" md:col-span-5 flex flex-col gap-4">
                    <div class="border rounded-lg p-6 border-neutral-300 wow animate__animated animate__fadeInUp">
                        <div class="flex items-center gap-6">
                            <h3 class="text-3xl font-bold text-neutral-900">1.8k+</h3>
                            <p class="text-sm text-neutral-500">Happy Customers</p>
                        </div>
                        <p class="mt-2 text-neutral-600 text-sm">
                            With a diverse client portfolio, we’re the go-to agency for all things digital.
                            <span class="font-medium text-neutral-900">Together, we’ll discover the perfect
                                solution.</span>
                        </p>
                    </div>

                    <div class="border rounded-lg p-6 border-neutral-300 wow animate__animated animate__fadeInUp">
                        <div class="flex items-center gap-6">
                            <h3 class="text-3xl font-bold text-neutral-900">1.8k+</h3>
                            <p class="text-sm text-neutral-500">Project complete</p>
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
    <section class=" py-8 md:py-10 lg:py-12">
        <div class="w-full px-5 xl:px-0 xl:w-[84%] ml-auto relative ">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-0 gap-24 items-center relative">

                <div class="md:col-span-8 pr-0 lg:pr-8">
                    <SectionHeader text="Our Team" />

                    <h2
                        class="wow animate__animated animate__fadeInUp text-2xl md:text-3xl lg:text-4xl font-bold leading-snug text-neutral-900">
                        Collaborating with us is your pathways to success
                    </h2>

                    <div
                        class="mt-2 text-neutral-600 w-full md:w-[85%] xl:w-[80%] mr-auto wow animate__animated animate__fadeInUp">
                        <p class="mb-2 text-neutral-600">
                            Bring your idea to life with the tools you need to start selling.
                        </p>
                        <p>
                            As a company with over a decade of experience, we at Brand Vision are proud to have worked
                            with many outstanding businesses and industries worldwide. These partnerships have allowed
                            us to expand our knowledge, skills, and expertise, and have helped us to continuously
                            improve our services and deliver excellent results for our clients.
                        </p>
                    </div>
                    <div class=" mt-4 md:mt-6 lg:mt-8 wow animate__animated animate__fadeInUp">
                        <NavigatePrimary text="Let’s meet our team" to="/contact" />
                    </div>
                </div>
                <div class="md:col-span-4 h-full flex lg:items-center xl:items-end relative">
                    <div
                        class="wow animate__animated animate__fadeInRight relative w-[140px] h-[140px] md:w-[160px] md:h-[160px] lg:h-[200px] lg:w-[200px] rounded-full bg-violet-100 flex items-center justify-center shadow-[0_10px_30px_rgba(2,6,23,0.08)]">
                        <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=640&auto=format&fit=crop"
                            alt="person"
                            class="h-[140px] w-[140px] lg:h-[170px] lg:w-[170px] rounded-full object-cover" />
                        <div
                            class="absolute right-[-140px] top-[-70px] h-[90px] w-[90px] lg:h-[110px] lg:w-[110px] rounded-full bg-primary-100 flex items-center justify-center shadow-[0_8px_20px_rgba(2,6,23,0.06)]">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=320&auto=format&fit=crop"
                                alt="person"
                                class="h-[70px] w-[70px] lg:h-[90px] lg:w-[90px] rounded-full object-cover" />
                        </div>
                        <div
                            class="absolute right-[-120px] bottom-[-40px] h-[70px] w-[70px] lg:h-[90px] lg:w-[90px] rounded-full bg-neutral-100 flex items-center justify-center shadow-[0_8px_20px_rgba(2,6,23,0.06)]">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=320&auto=format&fit=crop"
                                alt="person"
                                class="h-[60px] w-[60px] lg:h-[80px] lg:w-[80px] rounded-full object-cover" />
                        </div>
                    </div>

                </div>
            </div>
            <!-- <div class="absolute z-[-1] left-[1%] bottom-[10px]">
                <img src="@/assets/images/teamBg.svg" alt="" />
            </div> -->
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="">
                <h5 class=" text-base font-semibold text-neutral-900 text-center mb-3">Our recent clients & partners
                </h5>
                <PartnerMarquee />
                <PartnerMarquee :reverse="true" />
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <!-- Heading -->
            <h2
                class="wow animate__animated animate__fadeInUp text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900">
                Have a project idea in mind?
                Let's get started.
            </h2>
            <p class="wow animate__animated animate__fadeInUp mt-2 text-sm lg:text-base text-neutral-500 max-w-3xl">We
                create appealing, user-friendly designs
                that help our clients delight the audience, increase brand awareness.</p>

            <!-- Cards -->
            <ContactCard />

        </div>
    </section>

</template>

<script setup>
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';
import bgImg from '@/assets/images/about_bg.svg';
import StartBuilding from '@/components/section/StartBuilding.vue';
import TeamMemberCard from '@/components/ui/card/TeamMemberCard.vue'
import NavigatePrimary from '@/components/ui/button/NavigatePrimary.vue';
import SectionHeader from '@/components/ui/heading/SectionHeader.vue';
import ContactCard from '@/components/ui/card/ContactCard.vue';
import { useFetch } from "@/composables/useFetch.js"

const { data: CEO } = useFetch("/api/ceoinfo")



</script>
