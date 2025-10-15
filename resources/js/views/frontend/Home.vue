<template>
    <section>
        <div class="hero relative w-full h-screen bg-no-repeat bg-center bg-cover mt-[-120px]"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="hero-content text-center text-white pt-40 container flex flex-col items-center gap-3">
                <div class="bg-white rounded-full px-4 py-1.5 text-primary-500">
                    <span class="w-2 h-2 rounded-full bg-primary-500 inline-block mr-2"></span>
                    <span class="text-sm font-semibold"> Top Software Development Company</span>
                </div>
                <h1 class="hero-title text-4xl lg:text-7xl font-bold mb-4 text-neutral-900">Transforming Ideas, into
                    reality
                    with
                    <span class="text-neutral-500">Software Solutions</span>
                </h1>
                <p class="hero-description text-base font-normal md:text-lg text-neutral-500">Our expert team develops
                    innovative, tailored
                    software to
                    help your business thrive in today’s digital landscape.</p>
                <div class="heroaction flex mt-8 justify-center gap-2 flex-col md:flex-row items-center">
                    <router-link to="#" class="bg-primary-500 px-4 py-3 rounded-full flex gap-3 text-base items-center">
                        <span class="font-medium">Contact us</span>
                        <div class="flex items-center justify-center md:justify-end -space-x-2">
                            <img src="@/assets/images/icons/user_20.svg" alt="Person 1"
                                class="w-8 h-8 rounded-full border-2 border-white object-cover" />
                            <img src="@/assets/images/icons/user_20.svg" alt="Person 2"
                                class="w-8 h-8 rounded-full border-2 border-white object-cover" />
                            <img src="@/assets/images/icons/user_20.svg" alt="Person 3"
                                class="w-8 h-8 rounded-full border-2 border-white object-cover" />
                        </div>
                    </router-link>


                    <NavigateSecondaryButton text="See Our Case Study" to="/casestudy" />
                </div>

            </div>
        </div>
    </section>

    <section class="flex flex-col md:flex-row items-center justify-between gap-10 py-16 px-6 md:px-16 bg-white">
        <!-- Left Image -->
        <div class="md:w-1/2 w-full">
            <img src="@/assets/images/team_image.svg" alt="Team discussion"
                class="w-full h-auto rounded-lg object-cover shadow-lg" />
        </div>

        <!-- Right Content -->
        <div class="md:w-1/2 w-full">
            <span class="inline-block text-sm font-medium text-neutral-500 bg-neutral-100 px-3 py-1 rounded-full mb-4">
                Team Achievements
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">
                Smart Solutions for Bold Thinkers
            </h2>
            <p class="text-neutral-600 leading-relaxed mb-6">
                We believe that great products begin with empathy. By putting people at the center of everything we do,
                we create solutions that make a meaningful difference.
            </p>
            <p class="text-neutral-600 leading-relaxed mb-6">
                Our goal is to bridge technology and human insight — designing experiences that inspire collaboration,
                creativity, and empower growth.
            </p>
            <p class="text-neutral-600 leading-relaxed mb-8">
                By staying curious and adaptable, we continuously push boundaries to build software that not only meets
                today’s needs but is ready for tomorrow’s opportunities.
            </p>

            <!-- Stats Section -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 border-t border-neutral-200 pt-6">
                <div>
                    <h3 class="text-2xl font-semibold text-neutral-900">+1.8k</h3>
                    <p class="text-neutral-500 text-sm">Happy Customers</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-neutral-900">+11</h3>
                    <p class="text-neutral-500 text-sm">Years Experiences</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-neutral-900">10</h3>
                    <p class="text-neutral-500 text-sm">Awards Rewarded</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-neutral-900">20</h3>
                    <p class="text-neutral-500 text-sm">Projects Complete</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 px-6 md:px-16 bg-neutral-50">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="inline-block text-sm font-medium text-neutral-600 bg-white px-4 py-1 rounded-full shadow-sm">
                Services We Provide
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mt-4">
                Everything You Need to Build, Launch, and Grow
            </h2>
            <p class="text-neutral-600 mt-3">
                We offer end-to-end digital solutions tailored to your needs — from web and mobile app development to QA
                testing and full-stack engineering.
            </p>
        </div>

        <!-- Service Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-1">UI/UX Design & Audit</h3>
                        <p class="text-neutral-600 text-sm">To lay a solid foundation for the creative process that
                            follows.</p>
                    </div>
                    <button class="p-2 rounded-full bg-teal-50 hover:bg-teal-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <img src="@/assets/images/service.svg" alt="UI UX Design" class="w-full rounded-lg object-cover mt-4" />
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-1">Software Development</h3>
                        <p class="text-neutral-600 text-sm">We believe that great software starts with understanding and
                            discovery.</p>
                    </div>
                    <button class="p-2 rounded-full bg-teal-50 hover:bg-teal-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <img src="@/assets/images/service.svg" alt="Software Development"
                    class="w-full rounded-lg object-cover mt-4" />
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-1">Web Application Development</h3>
                        <p class="text-neutral-600 text-sm">We build powerful and user-centric web experiences with deep
                            understanding.</p>
                    </div>
                    <button class="p-2 rounded-full bg-teal-50 hover:bg-teal-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <img src="@/assets/images/service.svg" alt="Web App Development"
                    class="w-full rounded-lg object-cover mt-4" />
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-1">Mobile App Development</h3>
                        <p class="text-neutral-600 text-sm">To craft mobile experiences that truly connect with users.
                        </p>
                    </div>
                    <button class="p-2 rounded-full bg-teal-50 hover:bg-teal-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <img src="@/assets/images/service.svg" alt="Mobile App Development"
                    class="w-full rounded-lg object-cover mt-4" />
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-1">QA Testing</h3>
                        <p class="text-neutral-600 text-sm">We identify issues early and refine functionality through
                            meticulous testing.</p>
                    </div>
                    <button class="p-2 rounded-full bg-teal-50 hover:bg-teal-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <img src="@/assets/images/service.svg" alt="QA Testing" class="w-full rounded-lg object-cover mt-4" />
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-2xl shadow-sm p-6 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-xl font-semibold text-neutral-900 mb-1">Database Management</h3>
                        <p class="text-neutral-600 text-sm">To ensure reliability, performance, and scalability with
                            deep
                            insights.</p>
                    </div>
                    <button class="p-2 rounded-full bg-teal-50 hover:bg-teal-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-teal-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <img src="@/assets/images/service.svg" alt="Database Management"
                    class="w-full rounded-lg object-cover mt-4" />
            </div>
        </div>
    </section>

    <section class="py-20 px-6 md:px-16 bg-white">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between mb-12">
                <div class="md:w-1/2">
                    <span
                        class="inline-block text-sm font-medium text-neutral-600 bg-neutral-100 px-4 py-1 rounded-full mb-4">
                        Why Choose Us
                    </span>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 leading-snug">
                        Shaping Your Vision into Real-World Success
                    </h2>
                </div>
                <p class="md:w-1/2 text-neutral-600 mt-4 md:mt-0">
                    We specialize in custom software development outsourcing, delivering high-quality, scalable,
                    and efficient solutions to clients worldwide.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="border border-neutral-100 rounded-xl p-6 hover:shadow-md transition">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-neutral-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L6 20.25 2.25 17M6 3.75v16.5M21.75 12L18 8.25 14.25 12M18 20.25V3.75" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Design System Strategy</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        We create cohesive and scalable design systems that ensure consistency, usability,
                        and a seamless user experience across all digital products.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="border border-neutral-100 rounded-xl p-6 hover:shadow-md transition">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-neutral-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.5v15m-7.5-7.5h15" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Full-Stack Expertise</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        Our team is proficient in both front-end and back-end technologies, enabling us to build
                        end-to-end
                        solutions with high performance and flexibility.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="border border-neutral-100 rounded-xl p-6 hover:shadow-md transition">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-neutral-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6h4m-2-2v4m0 12a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Tool-Agnostic Flexibility</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        We adapt to the tools and technologies that best suit your project needs — ensuring maximum
                        efficiency without being limited to specific stacks or platforms.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="border border-neutral-100 rounded-xl p-6 hover:shadow-md transition">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-neutral-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 17l6-6 4 4 8-8" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Quality-Driven Development</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        We follow best practices and rigorous quality standards to deliver robust, maintainable, and
                        secure software solutions.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="border border-neutral-100 rounded-xl p-6 hover:shadow-md transition">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-neutral-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1 4v-4m-4 4v-4H6m6 0h1v4h1m0-4v4h1m1-4v4h1" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Client-Centric Approach</h3>
                    <p class="text-neutral-600 text-sm leading-relaxed">
                        Your goals guide our process. We prioritize clear communication, transparency, and collaboration
                        throughout every project.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="border border-neutral-100 rounded-xl p-6 hover:shadow-md transition">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-neutral-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M9 21h6m-3-11v11m7-20H5a2 2 0 00-2 2v2h18V3a2 2 0 00-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Comprehensive System Testing</h3>
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
</script>