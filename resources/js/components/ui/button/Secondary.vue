<template>
    <button
        class="px-4 py-2 bg-secondary-500 text-white rounded hover:bg-secondary-600 focus:outline-none focus:ring-2 focus:ring-secondary-300 transition-colors duration-300">
        <slot>{{ text }}</slot>
    </button>
</template>
<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    text: {
        type: String,
        default: 'Click Me',
    },
});
</script>