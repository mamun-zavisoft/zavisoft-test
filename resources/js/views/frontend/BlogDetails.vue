<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class="pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3 border-b border-neutral-200 pb-6 md:pb-8 lg:pb-12">
                    <div class="flex flex-col items-center gap-2 md:gap-3 lg:gap-4 justify-center ">
                        <h1
                            class=" text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl leading-8 md:leading-10 lg:leading-16  font-bold text-neutral-900">
                            A Developer’s Journey Through Platform Onboarding
                        </h1>
                        <p class="text-xs md:text-[13px] lg:text-sm text-neutral-400 font-medium flex gap-2 md:gap-4">
                            <span>By Richard Aurora</span> |
                            <span> Date 10.Oct 2025</span> |
                            <span> Read 1 Min ago</span>
                        </p>

                    </div>
                    <div class="mt-6 w-full">
                        <img src="@/assets/images/blog_1.svg" alt="Blog Image"
                            class="w-full max-h-[735px] object-cover">
                    </div>

                </div>

                <div class="mt-6 md:mt-8 lg:mt-10 relative single-post-container ">
                    <BlogTableContent />

                </div>

            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12 bg-neutral-50">
        <div class="container">
            <div class="recent-blogs border-t border-neutral-200 pt-6 md:pt-8 lg:pt-10">
                <h2 class="text-2xl font-semibold text-neutral-900 mb-6">Recent Blogs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
                    <!-- Example Blog Card -->
                    <article v-for="(blog, index) in blogs" :key="index">
                        <router-link :to="{ name: 'BlogDetails', params: { id: blog.id } }">
                            <div class="overflow-hidden duration-300">
                                <div class="">
                                    <img :src="blog.image" alt="Blog Image" class="w-full max-h-[360px] object-cover">
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


            </div>
        </div>
    </section>
</template>
<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import BlogTableContent from '@/components/section/BlogTableContent.vue';
const blogs = [
    {
        id: 1,
        writer: "Richard Aurora",
        image: new URL('@/assets/images/blog_1.svg', import.meta.url).href,
        title: "Game Changer Alert: Canva Code is Here Transforms Ideas into Reality"
    },
    {
        id: 2,
        writer: "Richard Aurora",
        image: new URL('@/assets/images/blog_2.svg', import.meta.url).href,
        title: "Game Changer Alert: Canva Code is Here Transforms Ideas into Reality"
    }



];
</script>