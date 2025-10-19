<template>
    <swiper :slides-per-view="3" :space-between="50" @swiper="onSwiper" @slideChange="onSlideChange">
        <swiper-slide>
            <FeatureCard />
        </swiper-slide>
        <swiper-slide>
            <FeatureCard />
        </swiper-slide>
        <swiper-slide>
            <FeatureCard />
        </swiper-slide>
    </swiper>
</template>

<script setup>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue'

// Import Swiper styles
import 'swiper/css'

// Import your custom component
import FeatureCard from '../../why_us/FeatureCard.vue'

// Define event handlers directly
const onSwiper = (swiper) => {
    console.log(swiper)
}

const onSlideChange = () => {
    console.log('slide change')
}
</script>
