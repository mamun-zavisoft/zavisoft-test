<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class="pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3 border-b border-neutral-200 pb-6 md:pb-8 lg:pb-12">
                    <div class="flex flex-col items-center gap-2 md:gap-3 lg:gap-4 justify-center ">
                        <h1 data-wow-delay="300ms"
                            class="wow animate__animated animate__fadeIn text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl leading-10 lg:leading-16  font-bold text-neutral-900">
                            Featured Insights: Top Blog <br> <span class="text-neutral-500 text-center">Highlights &
                                Beyond</span>
                        </h1>
                        <p data-wow-delay="350ms"
                            class="wow animate__animated animate__fadeIn text-sm md:text-base text-neutral-600">
                            Dreaming of a job where you can build cool
                            things and celebrate big wins?
                            You’re in the right spot!</p>
                        <div data-wow-delay="400ms"
                            class="wow animate__animated animate__fadeIn w-full max-w-[520px] mt-4">

                            <input type="text" id="first_name"
                                class=" bg-white border border-transparent text-neutral-900 text-sm rounded-lg focus:ring-primary-500 ring-0 focus:border-primary-500 block w-full px-4 py-3.5 placeholder:text-base placeholder:text-neutral-400 "
                                placeholder="Search here" />
                        </div>
                    </div>

                </div>
                <div class="recent-blogs mt-10">
                    <h2 class="text-2xl font-semibold text-neutral-900 mb-6">Recent Blogs</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
                        <!-- Example Blog Card -->
                        <article v-for="(blog, index) in blogs" :key="index">
                            <router-link :to="blog.link">
                                <div class="overflow-hidden duration-300 wow animate__zoomIn animate__animated">
                                    <div class="">
                                        <img :src="blog.image" alt="Blog Image"
                                            class="w-full max-h-[360px] object-cover">
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-sm lg:text-base text-neutral-600 mb-2 line-clamp-1">By {{
                                            blog.writer }}
                                        </p>
                                        <h3
                                            class="text-base lg:text-lg xl:text-xl font-medium text-neutral-900 line-clamp-2">
                                            {{ blog.title }}
                                        </h3>
                                    </div>
                                </div>
                            </router-link>
                        </article>

                    </div>
                    <!-- <div class="mt-16 flex justify-center">
                        <button
                            class="lg:text-base text-sm px-4 lg:px-6 py-2 lg:py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition duration-300 cursor-pointer">
                            Load More
                        </button>
                    </div> -->
                </div>

            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>

    <section class=" py-8 md:py-10 lg:py-12 mb-30">
        <div class="w-full px-5 xl:px-0 xl:w-[84%] ml-auto relative ">
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-0 gap-24 items-center relative">

                <div class="md:col-span-8 pr-0 lg:pr-8">
                    <SectionHeader text="Our Team" />

                    <h2 data-wow-delay="300ms"
                        class="wow animate__animated animate__fadeInUp text-2xl md:text-3xl lg:text-4xl font-bold leading-snug text-neutral-900">
                        Collaborating with us is your pathways to success
                    </h2>

                    <div data-wow-delay="400ms"
                        class="wow animate__animated animate__fadeInUp mt-2 text-neutral-600 w-full md:w-[85%] xl:w-[80%] mr-auto">
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
                    <div data-wow-delay="350ms" class=" mt-4 md:mt-6 lg:mt-8 wow animate__animated animate__fadeInUp">
                        <NavigatePrimaryButton text="Let’s meet our team" to="/contact" />
                    </div>
                </div>
                <div class="md:col-span-4 h-full flex lg:items-center xl:items-end relative">
                    <div
                        class="wow animate__animated  animate__fadeInRight relative w-[140px] h-[140px] md:w-[160px] md:h-[160px] lg:h-[200px] lg:w-[200px] rounded-full bg-violet-100 flex items-center justify-center shadow-[0_10px_30px_rgba(2,6,23,0.08)]">
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
</template>

<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import StartBuilding from '@/components/section/StartBuilding.vue';
import SectionHeader from '@/components/ui/heading/SectionHeader.vue';
import 'animate.css'

import NavigatePrimaryButton from '../../components/ui/button/NavigatePrimary.vue';


const blogs = [
    {
        id: 1,
        writer: "Richard Aurora",
        image: new URL('@/assets/images/blog_1.svg', import.meta.url).href,
        title: "A Developer’s Journey Through Platform Onboarding",
        link: "/blog-one"
    },
    {
        id: 2,
        writer: "Mira Donovan",
        image: new URL('@/assets/images/blog_2.svg', import.meta.url).href,
        title: "A Complete Look at End-to-End Testing",
        link: "/blog-two"
    },
    {
        id: 3,
        writer: "Adrian Keller",
        image: new URL('@/assets/images/blog_3.svg', import.meta.url).href,
        title: "The Smart Way Developers Validate Products Faster with AI Coding Support",
        link: "/blog-three"
    },
    {
        id: 4,
        writer: "Dylan Mercer",
        image: new URL('@/assets/images/blog_4.svg', import.meta.url).href,
        title: "Agile Excellence: Developing a Holistic Quality Perspective",
        link: "/blog-four"
    }

];

</script>