<template>
    <div class="growth relative w-full h-90 md:h--100 lg:h-110 bg-no-repeat bg-center bg-cover md:h-120"
        :style="{ backgroundImage: `url(${bgImg})` }">
        <div class="container h-full relative">
            <div class="flex flex-col items-center text-center justify-center h-full">
                <div class="flex items-center justify-center -space-x-2">
                    <img src="@/assets/images/icons/user_20.svg" alt="Person 1"
                        class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white object-cover" />
                    <img src="@/assets/images/icons/user_20.svg" alt="Person 2"
                        class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white object-cover" />
                    <img src="@/assets/images/icons/user_20.svg" alt="Person 3"
                        class="w-12 h-12 lg:w-16 lg:h-16 rounded-full border-2 border-white object-cover" />
                </div>
                <h1
                    class="text-2xl md:text-3xl lg:text-4xl font-bold text-neutral-900 mt-4 md:mt-6 lg:mt-8 px-0 md:px-16 lg:px-32">
                    Start
                    building high performing
                    website & grow your business fast.</h1>
                <NavigatePrimaryButton text="Let’s build a project" to="/contact" class="mt-6 lg:mt-8" />
            </div>
            <div class="ele ele1 bg-white rounded-full px-3 py-1.5 absolute top-[24%] left-[8%]">
                <img src="@/assets/images/icons/ele_icon_1.svg" alt="">
                <span class="text-xs text-black font-semibold">Impress Clients</span>
            </div>
            <div class="ele ele2 bg-white rounded-full px-3 py-1.5 absolute top-[15%] lg:right-[15%]  md:right-[10%]">
                <img src="@/assets/images/icons/ele_icon_2.svg" alt="">
                <span class="text-sm text-black font-semibold">Innovative</span>
            </div>
            <div class="ele ele3 bg-white rounded-full px-3 py-1.5 absolute bottom-[20%] lg:right-[12%]  md:right-[8%]">
                <img src="@/assets/images/icons/ele_icon_3.svg" alt="">
                <span class="text-sm text-black font-semibold">Increase Revenue</span>
            </div>
            <div class="ele ele4 bg-white rounded-full px-3 py-1.5 absolute bottom-[30%] left-[2%]">
                <img src="@/assets/images/icons/ele_icon_4.svg" alt="">
                <span class="text-sm text-black font-semibold">User-Centric</span>
            </div>
        </div>
    </div>
</template>

<script setup>
import bgImg from '@/assets/images/start_building.svg';
import NavigatePrimaryButton from '@/components/ui/button/NavigatePrimary.vue';

</script>

<style scoped>
.ele {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transform: translate3d(0, 0, 0) scale(1);
    transition: transform 0.45s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.ele1 {
    transition-delay: 0s;
}

.ele2 {
    transition-delay: 60ms;
}

.ele3 {
    transition-delay: 120ms;
}

.ele4 {
    transition-delay: 180ms;
}

.growth:hover .ele {
    opacity: 1;
}

.growth:hover .ele1 {
    transform: translate3d(-6px, -18px, 0) scale(1.08) rotate(-3deg);
}

.growth:hover .ele2 {
    transform: translate3d(8px, -16px, 0) scale(1.07) rotate(2deg);
}

.growth:hover .ele3 {
    transform: translate3d(-4px, 18px, 0) scale(1.06) rotate(-2deg);
}

.growth:hover .ele4 {
    transform: translate3d(10px, 14px, 0) scale(1.05) rotate(3deg);
}
</style>
