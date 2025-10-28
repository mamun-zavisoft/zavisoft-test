<template>
    <div v-show="visible" class="fixed left-0 top-0 w-full z-[9999] pointer-events-none" aria-hidden="true">
        <div class="h-[3px] bg-primary-500" :style="{ width: progress + '%', transition: 'width 50ms ease' }" />
    </div>
</template>

<script setup>
import { ref } from 'vue'
const visible = ref(false)
const progress = ref(0)

// simple API the app can call
function start() {
    visible.value = true
    progress.value = 10
    tick()
}
function done() {
    progress.value = 100
    setTimeout(() => { visible.value = false; progress.value = 0 }, 200)
}
function tick() {
    if (!visible.value) return
    // trickle toward 90%
    const next = progress.value + Math.max(1, (90 - progress.value) * 0.07)
    progress.value = Math.min(90, next)
    setTimeout(tick, 200)
}
defineExpose({ start, done })
</script>
