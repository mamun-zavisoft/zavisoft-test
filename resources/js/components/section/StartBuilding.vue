<template>
    <div class="hero relative w-full h-110 bg-no-repeat bg-center bg-cover md:h-120"
        :style="{ backgroundImage: `url(${bgImg})` }">
        <div class="container">
            <div class="flex items-center justify-center -space-x-2">
                <img src="@/assets/images/icons/user_20.svg" alt="Person 1"
                    class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white object-cover" />
                <img src="@/assets/images/icons/user_20.svg" alt="Person 2"
                    class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white object-cover" />
                <img src="@/assets/images/icons/user_20.svg" alt="Person 3"
                    class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white object-cover" />
            </div>
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-neutral-900">Start building high performing
                website & grow your business fast.</h1>
            <NavigatePrimaryButton text="Let’s build a project" to="/contact" class="mt-6 lg:mt-8" />
        </div>
    </div>
</template>

<script setup>
import bgImg from '@/assets/images/start_building.svg';
import NavigatePrimaryButton from '@/components/ui/button/NavigatePrimary.vue';

</script>