<template>
    <div class="partner-row">
        <div class="marquee" ref="marquee">
            <ul class="marquee-content" :class="{ 'marquee-content--reverse': reverse }" ref="content">
                <li v-for="(src, i) in logos" :key="i"
                    class="border border-neutral-300 rounded px-4 py-2 flex items-center justify-center max-h-[50px]">
                    <img :src="src" alt="" class="max-h-full max-w-full object-contain" />
                </li>
            </ul>
        </div>
    </div>
</template>

<script setup>
import { onMounted, ref, toRef } from 'vue'

// Import assets so Vite resolves the paths
import bangladrop from '@/assets/images/partner/bangladrop.svg'
import faspower from '@/assets/images/partner/faspower.svg'
import fastAuto from '@/assets/images/partner/fast_auto.svg'
import hatbazar from '@/assets/images/partner/hatbazar.svg'
import pixelax from '@/assets/images/partner/pixelax.svg'
import steadfast from '@/assets/images/partner/steadfast.svg'

const props = defineProps({
    reverse: {
        type: Boolean,
        default: false,
    },
})

const reverse = toRef(props, 'reverse')

const logos = [bangladrop, faspower, fastAuto, hatbazar, pixelax, steadfast]

const marquee = ref(null)
const content = ref(null)

onMounted(() => {
    const root = document.documentElement
    const items = content.value.children.length

    // 1) Tell CSS how many elements we have
    root.style.setProperty('--marquee-elements', items)

    // 2) Duplicate the items once for seamless scrolling
    for (let i = 0; i < items; i++) {
        content.value.appendChild(content.value.children[i].cloneNode(true))
    }
})
</script>
