<template>
    <section>
        <div class="hero relative w-full h-screen bg-no-repeat bg-center bg-cover mt-[-120px]"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class="hero-content text-center text-white pt-24 md:pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3">
                    <div class="bg-white rounded-full px-4 py-1.5 text-primary-500">
                        <span class="w-2 h-2 rounded-full bg-primary-500 inline-block mr-2"></span>
                        <span class="text-sm font-semibold"> Top Software Development Company</span>
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
                        <router-link to="#"
                            class="bg-primary-500 px-3 md:px-4 py-2 lg:py-3 rounded-full flex gap-3 text-sm lg:text-base items-center">
                            <span class="font-medium">Contact us</span>
                            <div class="flex items-center justify-center md:justify-end -space-x-2">
                                <img src="@/assets/images/icons/user_20.svg" alt="Person 1"
                                    class="w-5 h-5 lg:w-7 lg:h-7 rounded-full border-2 border-white object-cover" />
                                <img src="@/assets/images/icons/user_20.svg" alt="Person 2"
                                    class="w-5 h-5 lg:w-7 lg:h-7 rounded-full border-2 border-white object-cover" />
                                <img src="@/assets/images/icons/user_20.svg" alt="Person 3"
                                    class="w-5 h-5 lg:w-7 lg:h-7 rounded-full border-2 border-white object-cover" />
                            </div>
                        </router-link>


                        <NavigateSecondaryButton text="See Our Case Study" to="/casestudy" />
                    </div>

                </div>
            </div>
            <div class="hero-slider mt-4">
                <HeroSlider :images="slides" :interval="3200" :autoplay="true" />
            </div>
        </div>
    </section>

    <section>
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
                <span
                    class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                    Team Achievements
                </span>
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
                <span
                    class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                    Services We Provide
                </span>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mg:gap-4 lg:gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg  p-4 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="mb-4 pr-4">
                            <h3 class="text-xl font-bold text-neutral-900 mb-3">UI/UX Design & Audit</h3>
                            <p class="text-neutral-600 text-sm line-clamp-3">To lay a solid foundation for the creative
                                process that follows.
                            </p>
                        </div>
                        <a href="#"
                            class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                    <img src="@/assets/images/service/ui.png" alt="UI UX Design"
                        class="w-full rounded-lg object-cover mt-4" />
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg  p-4 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="mb-4 pr-4">
                            <h3 class="text-xl font-bold text-neutral-900 mb-3">Software Development</h3>
                            <p class="text-neutral-600 text-sm line-clamp-3">We believe that great software starts with
                                understanding. Our development process begins with a deep discovery phase
                            </p>
                        </div>
                        <a href="#"
                            class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                    <img src="@/assets/images/service/web.png" alt="web development"
                        class="w-full rounded-lg object-cover mt-4" />
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg  p-4 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="mb-4 pr-4">
                            <h3 class="text-xl font-bold text-neutral-900 mb-3">Web Application Development</h3>
                            <p class="text-neutral-600 text-sm line-clamp-3">o build powerful and user-centric web
                                experiences, we begin our journey with a deep understanding of your goals.
                            </p>
                        </div>
                        <a href="#"
                            class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                    <img src="@/assets/images/service/soft.png" alt="software development"
                        class="w-full rounded-lg object-cover mt-4" />
                </div>
                <!-- Card 4 -->
                <div class="bg-white rounded-lg  p-4 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="mb-4 pr-4">
                            <h3 class="text-xl font-bold text-neutral-900 mb-3">Mobile App Developement</h3>
                            <p class="text-neutral-600 text-sm line-clamp-3">To craft mobile experiences that truly
                                connect with users.
                            </p>
                        </div>
                        <a href="#"
                            class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                    <img src="@/assets/images/service/app.png" alt="App development"
                        class="w-full rounded-lg object-cover mt-4" />
                </div>
                <!-- Card 5 -->
                <div class="bg-white rounded-lg  p-4 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="mb-4 pr-4">
                            <h3 class="text-xl font-bold text-neutral-900 mb-3">QA Testing</h3>
                            <p class="text-neutral-600 text-sm line-clamp-3">Through meticulous testing, validation, and
                                continuous feedback, we identify issues early, refine functionality.
                            </p>
                        </div>
                        <a href="#"
                            class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                    <img src="@/assets/images/service/qa.png" alt="QA Testing"
                        class="w-full rounded-lg object-cover mt-4" />
                </div>
                <!-- Card 6 -->
                <div class="bg-white rounded-lg  p-4 transition group">
                    <div class="flex justify-between items-start mb-4">
                        <div class="mb-4 pr-4">
                            <h3 class="text-xl font-bold text-neutral-900 mb-3">Database Management</h3>
                            <p class="text-neutral-600 text-sm line-clamp-3">To ensure reliability, performance, and
                                scalability, we start by understanding your data ecosystem inside out.
                            </p>
                        </div>
                        <a href="#"
                            class="p-2 rounded-full border border-neutral-300 bg-white transition group-hover:bg-primary-500 group-hover:border-primary-500 hover:bg-primary-500 hover:border-primary-500 cursorpointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="w-5 h-5 text-neutral-700 transform origin-center transition-transform transition-colors duration-300 group-hover:-rotate-45 group-hover:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                    <img src="@/assets/images/service/database.png" alt="Database Management"
                        class="w-full rounded-lg object-cover mt-4" />
                </div>
            </div>
        </div>
    </section>


    <!-- why Choose us -->
    <section class="py-8 md:py-10 lg:py-12 bg-white">
        <div class="container">
            <!-- Header -->
            <span
                class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                Why Choose Us
            </span>
            <div class="flex flex-col md:flex-row gap-4  justify-between mb-12">
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="feature_grid_item">
                    <div class="">
                        <img src="@/assets/images/icons/design_system.svg" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Design System Strategy</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed ">
                        We create cohesive and scalable design systems that ensure consistency, usability,
                        and a seamless user experience across all digital products.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="feature_grid_item">
                    <div class="">
                        <img src="@/assets/images/icons/full_stack.svg" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Full-Stack Expertise</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        Our team is proficient in both front-end and back-end technologies, enabling us to build
                        end-to-end
                        solutions with high performance and flexibility.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="feature_grid_item">
                    <div class="">
                        <img src="@/assets/images/icons/tool_agnostic.svg" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Tool-Agnostic Flexibility</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        We adapt to the tools and technologies that best suit your project needs — ensuring maximum
                        efficiency without being limited to specific stacks or platforms.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="feature_grid_item">
                    <div class="">
                        <img src="@/assets/images/icons/quality_driven.svg" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Quality-Driven Development</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        We follow best practices and rigorous quality standards to deliver robust, maintainable, and
                        secure software solutions.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="feature_grid_item">
                    <div class="">
                        <img src="@/assets/images/icons/client_centric.svg" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Client-Centric Approach</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        Your goals guide our process. We prioritize clear communication, transparency, and collaboration
                        throughout every project.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="feature_grid_item">
                    <div class="">
                        <img src="@/assets/images/icons/comprehensive_system.svg" alt="">
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-4">Comprehensive System Testing</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        From automated tests to manual QA, we ensure every product we deliver is thoroughly tested
                        for functionality, security, and performance.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-20  bg-white">
        <StartBuilding />
    </section>


</template>
<script setup>
import bgImg from '@/assets/images/hero_bg.webp';
import NavigateSecondaryButton from '@/components/ui/button/NavigateSecondary.vue';
import StartBuilding from '@/components/section/StartBuilding.vue';
import HeroSlider from '@/components/ui/button/slider/HeroSlider.vue';
import PartnerMarquee from '@/components/ui/button/slider/PatnerMarquee.vue';
const slides = [
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
];

</script>
