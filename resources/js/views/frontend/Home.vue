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
            <span
                class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                Product show case
            </span>
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
                        <span
                            class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                            Industry Focus
                        </span>
                        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold">Sectors Driving Our Expertise</h1>
                        <p class="mt-4 md:mt-6 lg:mt-8 text-sm md:text-base text-neutral-600">With over years of
                            experience, Brand Vision
                            takes pride in
                            collaborating with exceptional
                            businesses and industries across the globe. These partnerships have enriched our expertise,
                            sharpened our skills, and enabled us to consistently enhance our services—delivering
                            outstanding results for our clients.</p>
                        <NagigatePrimaryButton text="Let’s solve your issues" to="/services" class="mt-8 md:mt-12" />
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
            <div class="text-center mb-8 md:mb-10 lg:mb-12"><span
                    class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                    We Serve All Tech Stacks</span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-neutral-900 mt-2"> Frameworks to Functions —
                    We Do It All. </h2>
                <p class="text-neutral-600 mt-3 text-sm lg:text-base"> Bring your idea to life with the tools you need
                    to start selling. </p>
            </div>
            <div
                class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 divide-x divide-y divide-neutral-200 grid-tech">
                <!-- Repeat these items dynamically -->
                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                        alt="Node.js">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg" alt="Jira">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg"
                        alt="Bitbucket">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg"
                        alt="Discord">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" alt="Java">
                </div>
                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JavaScript">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-plain.svg"
                        alt="Angular">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dot-net/dot-net-original.svg"
                        alt=".NET">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg"
                        alt="Laravel">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
                        alt="Python">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cypressio/cypressio-original.svg"
                        alt="Cypress">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                        alt="Node.js">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg" alt="Jira">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg"
                        alt="Bitbucket">
                </div>

                <div class="flex items-center justify-center p-6">
                    <img class="h-12 w-auto"
                        src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg"
                        alt="Discord">
                </div>

            </div>
        </div>
    </section>

    <section class=" pb-16 sm:pb-0 py-8 md:py-10 lg:py-12 bg-primary-50">
        <div class="container">
            <TestimonialSlider />
        </div>
    </section>

    <!-- team section -->
    <section class=" py-8 md:py-10 lg:py-12">
        <div class="w-[84%] ml-auto relative ">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative">
                <!-- Left copy -->
                <div class="md:col-span-9">
                    <span
                        class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                        Our Team
                    </span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold leading-snug text-neutral-900">
                        Collaborating with us is your pathways to success
                    </h2>

                    <div class="mt-2 text-neutral-600 w-[60%] mr-auto">
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


                <!-- Right visuals -->
                <div class="md:col-span-3">
                    <div
                        class="absolute right-16 top-16 h-[220px] w-[220px] rounded-full bg-violet-100 flex items-center justify-center shadow-[0_10px_30px_rgba(2,6,23,0.08)]">
                        <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=640&auto=format&fit=crop"
                            alt="person" class="h-[170px] w-[170px] rounded-full object-cover" />
                    </div>
                    <div
                        class="absolute right-4 -top-2 h-[110px] w-[110px] rounded-full bg-primary-100 flex items-center justify-center shadow-[0_8px_20px_rgba(2,6,23,0.06)]">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=320&auto=format&fit=crop"
                            alt="person" class="h-[78px] w-[78px] rounded-full object-cover" />
                    </div>
                    <div
                        class="absolute right-8 top-[230px] h-[90px] w-[90px] rounded-full bg-neutral-100 flex items-center justify-center shadow-[0_8px_20px_rgba(2,6,23,0.06)]">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=320&auto=format&fit=crop"
                            alt="person" class="h-[60px] w-[60px] rounded-full object-cover" />
                    </div>
                </div>
            </div>
            <div class="absolute left-[20%] bottom-[-110px] z-[-1]">
                <img src="@/assets/images/teamBg.svg" alt="" />
            </div>
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
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left: contact info card -->
                <div class="rounded-lg border border-neutral-300 bg-white p-4 lg:p-6">
                    <div class=" flex flex-col gap-4 md:gap-6 justify-between h-full">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Give us a call -->
                            <div>
                                <p class="text-sm font-medium text-neutral-500">Give us a call</p>
                                <p class="mt-3 text-neutral-900">01729–645913</p>
                            </div>

                            <!-- Email us -->
                            <div>
                                <p class="text-sm font-medium text-neutral-500">Email us</p>
                                <p class="mt-3 text-neutral-900">Zavisoft@gmail.com</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Socials -->
                            <div>
                                <p class="text-sm font-medium text-neutral-500">Follow us</p>
                                <div class="mt-3 flex items-center gap-3">
                                    <!-- Simple icon buttons -->
                                    <a href="#"
                                        class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-4 w-4 text-neutral-700">
                                            <path
                                                d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.7-1.3 1.2V12h2.2l-.3 3h-1.9v7A10 10 0 0 0 22 12Z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-4 w-4 text-neutral-700">
                                            <path
                                                d="M12 2.2C6.5 2.2 2 6.7 2 12.2c0 4.4 2.9 8.1 6.9 9.4.5.1.7-.2.7-.5v-1.9c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.6 1 1.6 1 .9 1.6 2.5 1.1 3.1.8.1-.6.3-1.1.5-1.3-2.3-.3-4.7-1.1-4.7-5 0-1.1.4-2 1-2.7-.1-.3-.5-1.4.1-2.8 0 0 .9-.3 2.8 1a9.4 9.4 0 0 1 5.1 0c1.9-1.3 2.8-1 2.8-1 .6 1.4.2 2.5.1 2.8.7.7 1 1.6 1 2.7 0 3.9-2.4 4.7-4.8 5 .3.3.6.8.6 1.5v2.3c0 .3.2.6.7.5 4-1.3 6.9-5 6.9-9.4 0-5.5-4.5-10-10-10Z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"
                                            class="h-4 w-4 text-neutral-700">
                                            <path
                                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0Zm2.16 4.89c.66 0 1.2.54 1.2 1.2 0 .66-.54 1.2-1.2 1.2-.66 0-1.2-.54-1.2-1.2 0-.66.54-1.2 1.2-1.2ZM6.22 6.22h1.56v6.67H6.22V6.22Zm.78-2.44a.9.9 0 1 1 0 1.8.9.9 0 0 1 0-1.8Zm2.66 2.44h1.49v.91h.02c.21-.39.72-.8 1.49-.8 1.6 0 1.9 1.06 1.9 2.43v4.13h-1.55V9.35c0-.6-.01-1.36-.83-1.36-.84 0-.97.65-.97 1.32v3.58H9.66V6.22Z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="h-4 w-4 text-neutral-700">
                                            <path
                                                d="M20 2H4C2.9 2 2 2.9 2 4v16c0 1.1.9 2 2 2h8v-7H9v-3h3V9.5C12 6.5 13.8 5 16.5 5c1.2 0 2.4.1 2.5.1v3h-1.7c-1.3 0-1.3.6-1.3 1.3V12h3l-.5 3h-2.5v7H20c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Address -->
                            <div>
                                <p class="text-sm font-medium text-neutral-500">Address</p>
                                <p class="mt-2 max-w-sm text-neutral-900">House #44, Road 02, ASA Center, Zigatola,
                                    Dhanmondi-1209
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: form card -->
                <div class="rounded-lg border border-neutral-300 p-4 lg:p-6 bg-neutral-50">
                    <form action="#" method="post" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-sm font-medium text-neutral-600">Your Name</label>
                                <input id="name" name="name" type="text" placeholder="Type your name"
                                    class="h-10 rounded-full border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="email" class="text-sm font-medium text-neutral-600">Email</label>
                                <input id="email" name="email" type="email" placeholder="you@gmail.com"
                                    class="h-10 rounded-full border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1">
                            <label for="service" class="text-sm font-medium text-neutral-600 mb-2">Service name</label>
                            <div class="relative">
                                <select id="service" name="service"
                                    class="h-10 w-full appearance-none rounded-full border border-neutral-200 bg-white pl-3 pr-9 text-sm text-neutral-900 focus:border-primary-500">
                                    <option value="" selected>Select here</option>
                                    <option>UI/UX Design</option>
                                    <option>Web Development</option>
                                    <option>Mobile App (Flutter)</option>
                                    <option>Branding</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="details" class="text-sm font-medium text-neutral-600">Project details*</label>
                            <textarea id="details" name="details" rows="4" placeholder="Type here"
                                class="rounded-lg border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500"></textarea>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500">Send
                                a Brief</button>
                        </div>
                    </form>
                </div>
            </div>
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

const slides = [
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
    '@/assets/images/team_image.svg',
];

</script>
