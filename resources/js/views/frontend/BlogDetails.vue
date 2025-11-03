<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class="pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3 border-b border-neutral-200 pb-6 md:pb-8 lg:pb-12">
                    <div class="flex flex-col items-center gap-2 md:gap-3 lg:gap-4 justify-center ">
                        <h1
                            class=" text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl leading-10 lg:leading-16  font-bold text-neutral-900">
                            Game Changer Alert: Canva Code is Here Transforms Ideas into Reality
                        </h1>
                        <p class="text-sm text-neutral-400 font-medium flex gap-4">
                            <span>By Richard Aurora</span> |
                            <span> Date 10.Oct 2025</span> |
                            <span> Read 1 Min ago</span>
                        </p>

                    </div>
                    <div class="mt-6 w-full">
                        <img src="@/assets/images/blog_2.svg" alt="Blog Image"
                            class="w-full max-h-[620px] object-cover">
                    </div>

                </div>

                <div class="mt-10">
                    <BlogTableContent />
                </div>

            </div>
        </div>
    </section>
</template>
<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import BlogTableContent from '@/components/section/BlogTableContent.vue';
</script>