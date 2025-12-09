<template>
    <section>
        <div class="container">
            <h1
                class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-neutral-900 wow animate__animated animate__fadeInUp">

                {{ project?.title }}
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8 mt-9">

                <div class="md:col-span-7 lg:col-span-8 max-h-[360px] wow animate__animated animate__fadeInLeft ">
                    <img :src="`/storage/${project?.banner_image}`" alt=""
                        class=" max-h-[360px] block w-full h-auto object-cover rounded" loading="lazy">
                </div>
                <div
                    class="md:col-span-5 lg:col-span-4 md:sticky md:top-20 self-start h-full wow animate__animated animate__fadeInRight">
                    <div class="flex flex-col h-full">
                        <div class="bg-neutral-100 p-4 rounded-lg flex flex-col gap-4 justify-between flex-1">
                            <div>
                                <span class="inline-block text-sm font-medium mb-2">Company Logo:</span>
                                <div class="h-8 flex items-start my-3">
                                    <img src="@/assets/images/icons/logo.svg" alt="" class="h-full w-auto"
                                        loading="lazy">
                                </div>
                            </div>

                            <div>
                                <p class="text-sm md:text-base text-neutral-500">Our Contributes:</p>
                                <h5 class="mt-1 text-base md:text-lg font-semibold">
                                    {{ project?.contributors }}
                                </h5>
                            </div>

                            <div>
                                <p class="text-sm md:text-base text-neutral-500">Platforms:</p>
                                <h5 class="mt-1 text-base md:text-lg font-semibold">
                                    {{ project?.platforms }}
                                </h5>
                            </div>
                        </div>

                        <!-- Fit-content only, sits at bottom of sticky column -->
                        <div class="share-link mt-4 shrink-0 flex gap-3 items-center ">
                            <h6> Share link</h6>
                            <div class="flex items-center gap-2">

                                <!-- Facebook -->
                                <a :href="facebookShare" target="_blank"
                                    class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd"
                                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <!-- LinkedIn -->
                                <a :href="linkedinShare" target="_blank"
                                    class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center">
                                    <img src="@/assets/images/icons/linkEdin.svg" alt="" />
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="max-w-[800px] mr-auto">
                <div class="border-b border-neutral-300 pb-8 lg:pb-12">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold wow animate__animated animate__fadeInUp">
                        About the Project</h1>
                    <p
                        class="text-sm md:text-base text-neutral-500 mt-4 md:mt-6 wow animate__animated animate__fadeInUp">
                        {{ project?.about_project }}</p>
                </div>
                <div class="border-b border-neutral-300 pb-8 lg:pb-12 mt-6 lg:mt-8">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold wow animate__animated animate__fadeInUp">
                        Business Result</h1>
                    <p
                        class="text-sm md:text-base text-neutral-500 mt-4 md:mt-6 wow animate__animated animate__fadeInUp">
                        {{ project?.business_result }}</p>
                </div>
                <div class="project-images pt-8 lg:pt-12">
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                        <div v-for="(image, index) in galleryImages" :key="index"
                            class="max-h-[360px] wow animate__zoomIn animate__animated">
                            <img class="w-full h-full rounded-lg" :src="`/storage/${image}`" alt="">
                        </div>
                    </div>
                </div>

                <div class=" pt-8">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold wow animate__animated animate__fadeInUp">
                        Challenge</h1>
                    <p
                        class="text-sm md:text-base text-neutral-500 mt-4 md:mt-6 wow animate__animated animate__fadeInUp">
                        {{ project?.challenge }}
                    </p>
                </div>
                <div class="mt-8 p-4 bg-primary-50 rounded-lg ">
                    <h1
                        class="text-xl md:text-2xl lg:text-3xl mb-6 font-semibold wow animate__animated animate__fadeInUp">
                        Solution</h1>
                    <div class="mb-6">
                        <p class="text-base text-neutral-900">{{ project?.title }}</p>

                        <div v-html="project?.solution" class="prose text-neutral-600 mt-3"></div>
                    </div>


                </div>
                <div class=" pt-8">
                    <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold wow animate__animated animate__fadeInUp">
                        Final Impact</h1>
                    <p
                        class="text-sm md:text-base text-neutral-500 mt-4 md:mt-6 wow animate__animated animate__fadeInUp">

                        {{ project?.final_impact }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { useFetch } from "@/composables/useFetch.js"

import { useRoute } from "vue-router"
import { computed } from "vue"

const route = useRoute()
const slug = route.params.slug;

const { data: project } = useFetch(`/api/projects-details/${slug}`)


const currentUrl = computed(() => {
    return window.location.origin + route.fullPath
})

const facebookShare = computed(() =>
    `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(currentUrl.value)}`
)

const linkedinShare = computed(() =>
    `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(currentUrl.value)}`
)

const galleryImages = computed(() => {
    try {
        return JSON.parse(project.value?.gallery_image ?? "[]")
    } catch (e) {
        return []
    }
})

</script>