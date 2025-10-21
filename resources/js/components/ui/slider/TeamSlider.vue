<template>
    <div class="w-full">
        <Swiper :modules="swiperModules" :slides-per-view="getSlidesPerView" :space-between="24" :centered-slides="true"
            :loop="true" :speed="700" :autoplay="{ delay: 3000, disableOnInteraction: false }"
            :pagination="{ clickable: true }" class="max-w-[1200px] mx-auto">
            <SwiperSlide v-for="(item, idx) in resolvedSlides" :key="idx">
                <!-- Polaroid Card -->
                <div class="mx-auto select-none" :class="cardSize" :style="{
                    transform: `rotate(${item.rotation}deg)`
                }">
                    <div class="bg-white shadow-2xl rounded-md p-2">
                        <div class="relative overflow-hidden rounded">
                            <img :src="item.src" :alt="item.alt || 'slide image'" class="w-full h-full object-cover" />
                        </div>
                        <!-- Footer: light Instagram-like bar -->
                        <div class="flex items-center justify-between text-neutral-600 px-2 py-1">
                            <div class="flex items-center gap-2 opacity-70">
                                <HeartIcon class="w-4 h-4" />
                                <CommentIcon class="w-4 h-4" />
                                <SendIcon class="w-4 h-4" />
                            </div>
                            <BookmarkIcon class="w-4 h-4 opacity-70" />
                        </div>
                    </div>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</template>

<script setup>
import { computed } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Pagination, Autoplay } from 'swiper/modules'

// Props
const props = defineProps({
    /** Array of { src, alt?, rotation? } */
    slides: {
        type: Array,
        default: () => [
            { src: '/images/1.jpg', alt: 'slide 1', rotation: -12 },
            { src: '/images/2.jpg', alt: 'slide 2', rotation: 8 },
            { src: '/images/3.jpg', alt: 'slide 3', rotation: -5 },
            { src: '/images/4.jpg', alt: 'slide 4', rotation: 11 },
            { src: '/images/5.jpg', alt: 'slide 5', rotation: -8 },
            { src: '/images/6.jpg', alt: 'slide 6', rotation: 6 }
        ]
    },
    /** 'sm' | 'md' | 'lg' card sizes */
    size: {
        type: String,
        default: 'md'
    }
})

// Swiper modules
const swiperModules = [Pagination, Autoplay]

// Responsive slides per view to mimic your design spacing
const getSlidesPerView = computed(() => {
    if (typeof window === 'undefined') return 1.2
    const w = window.innerWidth
    if (w < 640) return 1.2
    if (w < 1024) return 2.2
    if (w < 1280) return 3.2
    return 4.2
})

const cardSize = computed(() => {
    switch (props.size) {
        case 'sm':
            return 'w-48 h-60'
        case 'lg':
            return 'w-72 h-[22rem]'
        default:
            return 'w-60 h-72'
    }
})

// Ensure each slide has a rotation (fallback to alternating angles)
const resolvedSlides = computed(() => {
    const fallback = [-14, -7, 5, 10, -9, 7]
    return props.slides.map((s, i) => ({
        ...s,
        rotation: typeof s.rotation === 'number' ? s.rotation : fallback[i % fallback.length]
    }))
})
</script>

<!-- Minimal inline icons (no extra deps) -->
<script>
export default {
    components: {
        HeartIcon: {
            props: ['class'],
            template: `<svg :class="class" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 21s-7-4.35-9.33-7.38C.54 10.85 2.06 7 5.5 7c2 0 3.04 1.03 3.94 2.12.4.48 1.22.48 1.62 0C12.96 8.03 14 7 16 7c3.44 0 4.96 3.85 2.83 6.62C19 16.65 12 21 12 21z" stroke="currentColor" stroke-width="1.5"/></svg>`
        },
        CommentIcon: {
            props: ['class'],
            template: `<svg :class="class" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 17l-4 4V7a4 4 0 014-4h10a4 4 0 014 4v6a4 4 0 01-4 4H7z" stroke="currentColor" stroke-width="1.5"/></svg>`
        },
        SendIcon: {
            props: ['class'],
            template: `<svg :class="class" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 2L11 13" stroke="currentColor" stroke-width="1.5"/><path d="M22 2l-7 20-4-9-9-4 20-7z" stroke="currentColor" stroke-width="1.5"/></svg>`
        },
        BookmarkIcon: {
            props: ['class'],
            template: `<svg :class="class" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3h12v18l-6-3-6 3V3z" stroke="currentColor" stroke-width="1.5"/></svg>`
        }
    }
}
</script>

<style>
/* Swiper core styles */
@import 'swiper/css';
@import 'swiper/css/pagination';

/* Pagination: center bottom, pill active like your mock */
:root {}

/* Use deep selector so Tailwind's scoped layers don't block it */
:deep(.swiper-pagination) {
    bottom: 0.75rem !important;
}

:deep(.swiper-pagination-bullet) {
    width: 8px;
    height: 8px;
    opacity: 0.35;
    background: #111827;
    /* neutral-900 */
    transition: width 200ms ease, opacity 200ms ease;
    margin: 0 6px !important;
}

:deep(.swiper-pagination-bullet-active) {
    width: 36px;
    border-radius: 9999px;
    opacity: 0.8;
}

/* Make slides overflow visible so rotated cards can peek out */
:deep(.swiper) {
    overflow: visible;
    padding-bottom: 2.5rem;
    /* room for pagination */
}

:deep(.swiper-slide) {
    overflow: visible;
}
</style>
