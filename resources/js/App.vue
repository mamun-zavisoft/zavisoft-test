<template>
    <TopLoader ref="topLoader" />

    <component :is="$route.meta.layout">
        <router-view />
    </component>
    <BackToTop />
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount, nextTick } from 'vue'
import { useRouter } from 'vue-router'
import TopLoader from '@/components/ui/TopLoader.vue'
import { registerTopLoader, useTopLoader } from '@/composables/useTopLoader'
import BackToTop from '@/components/ui/BackToTop.vue'

const topLoader = ref(null)
const router = useRouter()
const loader = useTopLoader()

let removeBeforeEach
let removeAfterEach
let removeOnError

onMounted(() => {
    nextTick(() => registerTopLoader(topLoader.value))

    removeBeforeEach = router.beforeEach((to, from, next) => {
        loader.start() // [Codex] immediately show loader for any navigation
        next()
    })

    removeAfterEach = router.afterEach(() => {
        loader.done() // [Codex] finish once navigation resolves (min 1s handled in composable)
    })

    removeOnError = router.onError(() => {
        loader.done()
    })
})

onBeforeUnmount(() => {
    if (removeBeforeEach) {
        removeBeforeEach()
    }
    if (removeAfterEach) {
        removeAfterEach()
    }
    if (removeOnError) {
        removeOnError()
    }
})
</script>
