<template>
    <section>
        <div class="container">
            <div class="flex flex-col gap-4 mb-6 lg:mb-8 ">
                <h1
                    class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900 wow animate__animated animate__fadeInUp">
                    Our latest projects
                </h1>
                <p class="text-sm md:text-base text-neutral-600 wow animate__animated animate__fadeInUp">We create
                    appealing, user-friendly designs that
                    help our clients delight the audience, increase brand awareness.</p>

            </div>
        </div>
    </section>
    <section class="pb-8 md:pb-10 lg:pb-12">
        <div class="container">
<Projects />
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <StartBuilding />
    </section>
</template>



<script setup>
import Projects from "@/components/ui/card/Projects.vue"



</script>
