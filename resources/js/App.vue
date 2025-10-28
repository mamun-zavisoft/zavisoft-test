<template>
<TopLoader ref="topLoader" />

    <component :is="$route.meta.layout">
        <router-view />
    </component>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount, nextTick } from 'vue'
import { useRouter } from 'vue-router'
import TopLoader from '@/components/ui/TopLoader.vue'
import { registerTopLoader, useTopLoader } from '@/composables/useTopLoader'

const topLoader = ref(null)
const router = useRouter()
const loader = useTopLoader()

let removeBeforeEach
let removeAfterEach
let removeOnError

onMounted(() => {
    nextTick(() => registerTopLoader(topLoader.value))

    removeBeforeEach = router.beforeEach((to, from, next) => {
        loader.start() 
        next()
    })

    removeAfterEach = router.afterEach(() => {
        loader.done()
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
