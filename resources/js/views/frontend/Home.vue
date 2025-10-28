<template>
    <section>
        <div class="hero relative w-full bg-no-repeat bg-center bg-cover mt-[-120px]"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class="relative z-1 hero-content text-center text-white pt-24 md:pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3">
                    <div class="bg-white rounded-full px-4 py-1.5 text-primary-500">
                        <span class="w-2 h-2 rounded-full bg-primary-500 inline-block mr-2"></span>
                        <span class="text-xs lg:text-sm font-semibold"> Top Software Development Company</span>
                    </div>
                    <h1
                        class="hero-title text-3xl md:text-4xl lg:text-5xl xl:text-7xl font-bold mb-2 lg:mb-4 text-neutral-900">
                        Transforming Ideas, into
                        reality
                        with <br>
                        <span class="text-neutral-500">Software Solutions</span>
                    </h1>
                    <p class="hero-description text-base font-normal md:text-lg text-neutral-500">Our expert team
                        develops
                        innovative, tailored
                        software to
                        help your business thrive in today’s digital landscape.</p>
                    <div class="heroaction flex mt-6 lg:mt-8 justify-center gap-2 items-center">
                        <router-link to="/contact"
                            class="bg-primary-500 px-3 md:px-4 py-2.5 lg:py-3 rounded-full flex gap-3 text-sm lg:text-base items-center">
                            <span class="font-medium">Contact us</span>
                            <div class="flex items-center justify-center md:justify-end -space-x-2">
                                <img src="@/assets/images/icons/user_20.svg" alt="Person 1"
                                    class="w-5 h-5 lg:w-7 lg:h-7 rounded-full border-2 border-white object-cover" />
                                <img src="@/assets/images/cntuser_1.png" alt="Person 2"
                                    class="w-5 h-5 lg:w-7 lg:h-7 rounded-full border-2 border-white object-cover" />
                                <img src="@/assets/images/cntuser_2.png" alt="Person 3"
                                    class="w-5 h-5 lg:w-7 lg:h-7 rounded-full border-2 border-white object-cover" />
                            </div>
                        </router-link>


                        <NavigateSecondaryButton text="See Our Case Study" to="/projects" />
                    </div>

                </div>
            </div>
            <div class="relative hero-slider ">
                <HeroSlider />
            </div>
        </div>
    </section>


    <section class=" mt-[-10%] md:mt-[-8%] xl:mt-[-6%] relative z-1">
        <div class="container">
            <div class="border-b border-neutral-200 pb-8 md:pb-10 lg:pb-12">
                <h5 class=" text-base font-semibold text-neutral-900 text-center mb-3">Our recent clients & partners
                </h5>
                <PartnerMarquee />
                <PartnerMarquee :reverse="true" />
            </div>
        </div>
    </section>



    <section class="py-8 md:py-10 lg:py-12 ">
        <div class="container flex flex-col-reverse md:flex-row items-center justify-between gap-16 ">
            <!-- Left Image -->
            <div class="md:w-1/2 w-full">
                <img src="@/assets/images/team_image.svg" alt="Team discussion"
                    class="w-full h-auto rounded-lg object-cover shadow-lg" />
            </div>

            <!-- Right Content -->
            <div class="md:w-1/2 w-full">
                <SectionHeader text="Team Achievements" />

                <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 mb-4">
                    Smart Solutions for Bold Thinkers
                </h2>
                <p class="text-neutral-600 leading-relaxed mb-1 text-sm lg:text-base">
                    We believe that great products begin with empathy. By putting people at the center of everything we
                    do,
                    we create solutions that make a meaningful difference.
                </p>
                <p class="text-neutral-600 leading-relaxed mb-1 text-sm lg:text-base">
                    Our goal is to bridge technology and human insight — designing experiences that inspire
                    collaboration,
                    creativity, and empower growth.
                </p>
                <p class="text-neutral-600 leading-relaxed mb-8 text-sm lg:text-base">
                    By staying curious and adaptable, we continuously push boundaries to build software that not only
                    meets
                    today’s needs but is ready for tomorrow’s opportunities.
                </p>

                <!-- Stats Section -->
                <div class="grid grid-cols-2 sm:grid-cols-2 gap-8 md:gap-10 lg:gap-12 pt-4 lg:pt-6">
                    <div class="border-l-4 border-primary-500 pl-4">
                        <h3 class="text-2xl lg:text-3xl font-bold text-neutral-900">+1.8k</h3>
                        <p class="text-neutral-900 text-sm">Happy Customers</p>
                    </div>
                    <div class="border-l-4 border-primary-500 pl-4">
                        <h3 class="text-2xl lg:text-3xl font-bold text-neutral-900">+11</h3>
                        <p class="text-neutral-900 text-sm">Years Experiences</p>
                    </div>
                    <div class="border-l-4 border-primary-500 pl-4">
                        <h3 class="text-2xl lg:text-3xl font-bold text-neutral-900">10</h3>
                        <p class="text-neutral-900 text-sm">Awards Rewarded</p>
                    </div>
                    <div class="border-l-4 border-primary-500 pl-4">
                        <h3 class="text-2xl lg:text-3xl font-bold text-neutral-900">20</h3>
                        <p class="text-neutral-900 text-sm">Projects Complete</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="py-8 md:py-10 lg:py-12 bg-neutral-50">
        <div class="container">
            <div class="text-center mb-8 md:mb-10 lg:mb-12">
                <SectionHeader text="Services We Provide" />

                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-neutral-900 mt-2">
                    Everything You Need to Build, Launch, and Grow
                </h2>
                <p class="text-neutral-600 mt-3 text-sm lg:text-base">
                    We offer end-to-end digital solutions tailored to your needs — from web and mobile app development
                    to QA
                    testing and full-stack engineering.
                </p>
            </div>

            <!-- Service Grid -->
            <Service />
        </div>
    </section>


    <!-- why Choose us -->
    <section class="py-8 md:py-10 lg:py-12 bg-white">
        <div class="container">
            <!-- Header -->

            <SectionHeader text="Why Choose Us" />
            <div class="flex flex-col md:flex-row gap-4  justify-between mb-8 md:mb-10 lg:mb-12">
                <div class="md:w-1/2">
                    <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                        Shaping Your Vision into Real-World Success
                    </h2>
                </div>
                <p class="md:w-1/2 text-neutral-600 md:pt-2 text-sm lg:text-base">
                    We specialize in custom software development outsourcing, delivering high-quality, scalable,
                    and efficient solutions to clients worldwide.
                </p>
            </div>

            <!-- Features Grid -->
            <FeatureCard />

        </div>
    </section>


    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <!-- Header -->

            <SectionHeader text="Product Show Case" />

            <div class="flex flex-col md:flex-row gap-8  justify-between mb-8 md:mb-10 lg:mb-12">
                <div class="md:w-1/2 ">
                    <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                        A glimpse into some of our top-performing product we develop
                    </h2>
                </div>
                <p class="md:w-1/2 text-neutral-600 md:pt-2 text-sm lg:text-base">
                    We are the best custom software development company for custom software development outsourcing. And
                    we provide robust, scalable, and efficient solutions to various clients around the world
                </p>
            </div>
        </div>
        <div class="mt-8 md:mt-12 lg:mt-16">
            <ShowCaseSlider />
        </div>
    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="industry-focus lg:border-b border-neutral-200 pb-12">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-16  justify-between">
                    <div class="lg:w-1/2">

                        <SectionHeader text="Industry Focus" />

                        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">Sectors Driving Our Expertise</h1>
                        <p class="mt-4 md:mt-6 lg:mt-8 text-sm md:text-base text-neutral-600">With over years of
                            experience, Brand Vision
                            takes pride in
                            collaborating with exceptional
                            businesses and industries across the globe. These partnerships have enriched our expertise,
                            sharpened our skills, and enabled us to consistently enhance our services—delivering
                            outstanding results for our clients.</p>
                        <NagigatePrimaryButton text="Let’s solve your issues" to="/contact" class="mt-8 md:mt-12" />
                    </div>
                    <div class="lg:w-1/2 ">
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 sm:gap-y-6 sm:gap-x-10 text-neutral-900 font-semibold">
                            <!-- Left Column -->
                            <div class="space-y-5">
                                <div class="flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/ecommerce.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">E-Commerce (B2C)</span>
                                </div>

                                <div class="flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/entertainment.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Entertainment</span>
                                </div>

                                <div class="flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/tech.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Tech</span>
                                </div>

                                <div class="flex items-center gap-3  border-b border-neutral-200 pb-3 ">
                                    <img src="@/assets/images/icons/digital_marketing.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Digital Marketing</span>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-5">
                                <div class="flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/healthcare.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Healthcare</span>
                                </div>

                                <div class="flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/travel_tourism.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Travel & Tourism</span>
                                </div>

                                <div class="flex items-center gap-3 border-b border-neutral-200 pb-3">
                                    <img src="@/assets/images/icons/education.svg" alt="" class="w-6 h-6" />
                                    <span class="font-semibold">Education</span>
                                </div>

                                <div class="flex items-center gap-3  border-b border-neutral-200 pb-3 ">
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


    <section class="industry-tech py-8 md:py-10 lg:py-12">
        <div class="container mx-auto">
            <div class="text-center mb-8 md:mb-10 lg:mb-12">
                <SectionHeader text="We Serve All Tech Stacks" />
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-neutral-900 mt-2"> Frameworks to Functions —
                    We Do It All. </h2>
                <p class="text-neutral-600 mt-3 text-sm lg:text-base"> Bring your idea to life with the tools you need
                    to start selling. </p>
            </div>
            <div class="w-full lg:max-w-[1220px] mx-auto">
                <TechStacks />
            </div>
        </div>
    </section>

    <section class=" pb-16 sm:pb-4 py-8 md:py-10 lg:py-12 bg-primary-50">
        <div class="container">
            <TestimonialSlider />
        </div>
    </section>
    <!-- team section -->
    <section class=" py-8 md:py-10 lg:py-12">
        <div class="w-full px-5 xl:px-0 xl:w-[84%] ml-auto relative ">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-0 gap-24 items-center relative">

                <div class="md:col-span-8 pr-0 lg:pr-8">
                    <SectionHeader text="Our Team" />

                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-snug text-neutral-900">
                        Collaborating with us is your pathways to success
                    </h2>

                    <div class="mt-2 text-neutral-600 w-full md:w-[85%] xl:w-[80%] mr-auto">
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
                    <div class=" mt-4 md:mt-6 lg:mt-8">
                        <NagigatePrimaryButton text="Let’s meet our team" to="/contact" />
                    </div>
                </div>
                <div class="md:col-span-4 h-full flex lg:items-center xl:items-end relative">
                    <div
                        class="relative w-[140px] h-[140px] md:w-[160px] md:h-[160px] lg:h-[200px] lg:w-[200px] rounded-full bg-violet-100 flex items-center justify-center shadow-[0_10px_30px_rgba(2,6,23,0.08)]">
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

    <section class=" py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="border-b border-neutral-300 pb-12">
                <FAQ />
            </div>
        </div>
    </section>

    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <!-- Heading -->
            <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900">Have a project idea in mind?
                Let's get started.
            </h2>
            <p class="mt-2 text-sm lg:text-base text-neutral-500 max-w-3xl">We create appealing, user-friendly designs
                that help our clients delight the audience, increase brand awareness.</p>

            <!-- Cards -->
            <ContactCard />

        </div>
    </section>

</template>
<script setup>
import bgImg from '@/assets/images/hero_bg.webp';
import NavigateSecondaryButton from '@/components/ui/button/NavigateSecondary.vue';
import StartBuilding from '@/components/section/StartBuilding.vue';
import HeroSlider from '@/components/ui/slider/HeroSlider.vue';
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';
import FeatureCard from '@/components/why_us/FeatureCard.vue';
import ShowCaseSlider from '@/components/ui/slider/ShowCaseSlider.vue';
import NagigatePrimaryButton from '@/components/ui/button/NavigatePrimary.vue';
import TestimonialSlider from '@/components/ui/slider/TestimonialSlider.vue';
import FAQ from '@/components/section/FAQ.vue';
import TechStacks from '@/components/section/TechStacks.vue';
import Service from '@/components/section/Service.vue';
import ContactCard from '@/components/ui/card/ContactCard.vue';
import SectionHeader from '@/components/ui/heading/SectionHeader.vue';


</script>
