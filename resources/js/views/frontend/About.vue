<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div class="pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-0">
                        <div class="col-span-12 md:col-span-6 lg:col-span-7">
                            <h1
                                class="wow animate__animated animate__fadeInUp text-center sm:text-left text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900">
                                From Simple Start to Strategic <span class="text-neutral-500">Global Ally.</span>
                            </h1>
                        </div>
                        <div class="col-span-12 md:col-span-6 lg:col-span-5">
                            <p
                                class="wow animate__animated animate__fadeInUp text-center  sm:text-left text-sm font-normal lg:text-base text-neutral-500">
                                Our
                                expert
                                team
                                We provide IT consulting and software development services, turning our clients’ visions
                                into reality with thoughtful storytelling, innovative thinking, and beautifully crafted
                                solutions.</p>
                        </div>
                    </div>
                    <div class="group-image my-4 md:my-6 lg:my-8 max-h-[570px] wow animate__animated animate__fadeInUp">
                        <img src="@/assets/images/ab_1.png" alt="">
                    </div>
                    <div
                        class="w-full md:w-[70%] mx-auto flex flex-col gap-3 items-center wow animate__animated animate__fadeInUp">
                        <h2 class="text-center text-2xl md:text-3xl lg:text-4xl font-bold text-neutral-900">
                            At Zavisoft, we connect advanced technology with the power of human creativity.
                        </h2>
                        <p class="text-center text-sm lg:text-base text-neutral-600">
                            Together, we turn potential into progress and ideas into innovation. The future starts now.
                        </p>
                        <router-link to="/contact" class="mt-2 inline-block text-neutral-900 font-medium transition">
                            Let’s talk
                        </router-link>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Who We Are? -->
    <section class="py-8 md:py-10 lg:py-12 bg-neutral-50">
        <div class="container">
            <!-- Header -->
            <SectionHeader text="Who We Are?" />

            <div class="flex flex-col md:flex-row gap-4  justify-between mb-8 md:mb-10 lg:mb-12">
                <div class="md:w-1/2 wow animate__animated animate__fadeInLeft">
                    <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                        Solving complex challenges is what drives us.
                    </h2>
                </div>
                <p
                    class="md:w-1/2 text-neutral-600 md:pt-2 text-sm lg:text-base wow animate__animated animate__fadeInRight">
                    We specialize in custom software development outsourcing, delivering high-quality, scalable, and
                    efficient solutions to clients worldwide.
                </p>
            </div>

            <!-- Features Grid -->
            <WeAreCard />

        </div>
    </section>

    <!-- Manifesto -->
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-0">
                <div class="col-span-12 md:col-span-4">
                    <SectionHeader text="Manifesto" />
                    <h2
                        class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug wow animate__animated animate__fadeInUp">
                        Our Exceptional Workplace Culture
                    </h2>
                </div>
                <div class="col-span-12 md:col-span-8 pl-0 md:pl-8">
                    <p class="text-neutral-600 text-sm lg:text-base wow animate__animated animate__fadeInUp">
                        We specialize in custom software development outsourcing, delivering high-quality, scalable, and
                        efficient solutions to clients worldwide.
                    </p>
                    <NavigateSecondary text="See our Case studies" to="/contact"
                        class=" mt-4 md:mt-6 lg:mt-8 wow animate__animated animate__fadeInUp" />
                </div>
            </div>
        </div>
    </section>

    <!-- slider  -->
    <section>
        <TeamSlider />
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

    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>

    <!-- team -->
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="mb-4 md:mb-6 lg:mb-8">
                <SectionHeader text="Meet Our Team" />
                <h2
                    class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug wow animate__animated animate__fadeInUp">
                    Our Diverse Team Tackles Numerous Exciting Projects
                </h2>
            </div>

            <TeamMemberCard />

        </div>
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
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';
import bgImg from '@/assets/images/about_bg.svg';
import WeAreCard from '@/components/why_us/WeAreCard.vue';
import NavigateSecondary from '@/components/ui/button/NavigateSecondary.vue';
import TeamSlider from '@/components/ui/slider/TeamSlider.vue';
import StartBuilding from '@/components/section/StartBuilding.vue';
import TeamMemberCard from '@/components/ui/card/TeamMemberCard.vue'
import NavigatePrimary from '@/components/ui/button/NavigatePrimary.vue';
import SectionHeader from '@/components/ui/heading/SectionHeader.vue';


</script>
