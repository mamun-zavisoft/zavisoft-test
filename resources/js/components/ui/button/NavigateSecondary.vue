<template>
    <button @click="redirectTo"
        class="px-3 md:px-4 py-2 lg:py-3 text-sm lg:text-base bg-transparent border font-semibold border-neutral-900 text-neutral-900 rounded-full transition-colors duration-300 cursor-pointer">
        {{ text }}
    </button>
</template>

<script setup>
import { useRouter } from 'vue-router';
import { defineProps } from 'vue';

const router = useRouter();

const props = defineProps({
    text: {
        type: String,
        default: 'Click Me',
    },
    to: {
        type: [String, Object],
        required: true,
    },
});

const redirectTo = () => {
    router.push(props.to);
};
</script>