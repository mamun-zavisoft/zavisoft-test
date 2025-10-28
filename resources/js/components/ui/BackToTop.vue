<template>
    <teleport to="body">
        <button v-show="visible" @click="scrollToTop" class="cursor-pointer fixed bottom-4 right-4 z-[9998] rounded-full shadow-lg bg-primary-500 text-white
             h-12 w-12 grid place-items-center
             transition-opacity duration-300
             hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-500
             md:bottom-6 md:right-6" :aria-label="ariaLabel">

            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M6 15l6-6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </teleport>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'

const visible = ref(false)
const threshold = 200
const ariaLabel = 'Back to top'

let ticking = false
function onScroll() {
    if (ticking) return
    ticking = true
    requestAnimationFrame(() => {
        visible.value = (window.scrollY || document.documentElement.scrollTop) > threshold
        ticking = false
    })
}

function scrollToTop() {
    const reduce = window.matchMedia?.('(prefers-reduced-motion: reduce)').matches
    if (reduce) {
        window.scrollTo(0, 0)
    } else {
        window.scrollTo({ top: 0, behavior: 'smooth' })
    }
}

onMounted(() => {
    window.addEventListener('scroll', onScroll, { passive: true })
    onScroll()
})
onBeforeUnmount(() => {
    window.removeEventListener('scroll', onScroll)
})
</script>

<style scoped>
button[v-cloak],
button[style*="display: none"] {
    opacity: 0;
}
</style>
