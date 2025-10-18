<template>
    <div ref="root" class="relative w-full overflow-hidden rounded-2xl bg-black/5"
        :style="{ perspective: perspective + 'px' }" @mouseenter="pause" @mouseleave="play"
        @touchstart.passive="onTouchStart" @touchend.passive="onTouchEnd" @keydown.left.prevent="prev"
        @keydown.right.prevent="next" tabindex="0">
        <!-- 3D track -->
        <div class="flex items-center justify-center transition-transform duration-700 ease-out will-change-transform"
            style="transform-style: preserve-3d;">
            <div v-for="(src, i) in imgs" :key="i" class="relative overflow-hidden rounded-xl shadow-xl select-none"
                :class="slideSizeClasses" :style="slideStyle(i)" role="img" :aria-label="`slide ${i + 1}`">
                <img class="h-full w-full object-cover" :src="src" alt="" draggable="false" />
                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
        </div>

        <!-- controls -->
        <button type="button"
            class="absolute left-2 top-1/2 -translate-y-1/2 rounded-full bg-white/80 p-2 backdrop-blur hover:bg-white focus:outline-none focus:ring"
            @click="prev" aria-label="Previous">‹</button>

        <button type="button"
            class="absolute right-2 top-1/2 -translate-y-1/2 rounded-full bg-white/80 p-2 backdrop-blur hover:bg-white focus:outline-none focus:ring"
            @click="next" aria-label="Next">›</button>

        <!-- dots -->
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
            <button v-for="(s, i) in imgs" :key="i" class="h-2 w-2 rounded-full transition-all"
                :class="i === index ? 'bg-white w-6' : 'bg-white/50 hover:bg-white/70'" @click="go(i)"
                aria-label="Go to slide" />
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted, watch } from 'vue'

/* Props (JS) */
const props = defineProps({
    images: { type: Array, required: true },
    interval: { type: Number, default: 3000 },
    autoplay: { type: Boolean, default: true },
    pauseOnHover: { type: Boolean, default: true },
    baseAngle: { type: Number, default: 22 } // degrees between slides
})

/* State */
const imgs = computed(() => props.images || [])
const index = ref(0)
let timer = null

const root = ref(null)
const perspective = ref(1100) // px
const depth = ref(380)        // translateZ px

/* Geometry / styles */
const anglePerSlide = computed(() => props.baseAngle)

const slideSizeClasses =
    'h-48 w-64 sm:h-56 sm:w-80 md:h-72 md:w-[28rem] xl:h-80 xl:w-[34rem]'

function slideStyle(i) {
    const d = i - index.value
    const angle = d * anglePerSlide.value
    const z = depth.value
    const scale = i === index.value ? 1 : 0.92
    const blur = Math.min(Math.abs(d) * 1.2, 4)
    return {
        transform: `rotateY(${angle}deg) translateZ(${z}px) scale(${scale})`,
        filter: `blur(${blur}px)`,
        transition: 'transform 700ms ease, filter 700ms ease'
    }
}

/* Controls */
function next() { index.value = (index.value + 1) % imgs.value.length }
function prev() { index.value = (index.value - 1 + imgs.value.length) % imgs.value.length }
function go(i) { index.value = i }

/* Autoplay */
function play() {
    if (!props.autoplay || imgs.value.length <= 1) return
    stop()
    timer = setInterval(next, props.interval)
}
function stop() { if (timer) { clearInterval(timer); timer = null } }
function pause() { if (props.pauseOnHover) stop() }

/* Swipe */
let touchStartX = 0
function onTouchStart(e) { touchStartX = e.changedTouches[0].clientX; pause() }
function onTouchEnd(e) {
    const dx = e.changedTouches[0].clientX - touchStartX
    if (Math.abs(dx) > 40) (dx < 0 ? next() : prev())
    play()
}

/* Resize → adapt perspective/depth */
const ro = new ResizeObserver(([entry]) => {
    const w = entry.contentRect.width
    perspective.value = Math.round(Math.min(Math.max(w * 1.3, 800), 1600))
    depth.value = Math.round(Math.min(Math.max(w * 0.35, 260), 520))
})

const onVis = () => (document.hidden ? stop() : play())

onMounted(() => {
    if (root.value) ro.observe(root.value)
    document.addEventListener('visibilitychange', onVis)
    play()
})

onUnmounted(() => {
    stop()
    ro.disconnect()
    document.removeEventListener('visibilitychange', onVis)
})

watch(() => props.autoplay, v => (v ? play() : stop()))
</script>

<style scoped>
/* Tailwind handles most styling; 3D is applied inline */
</style>
