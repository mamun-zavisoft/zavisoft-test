<template>
    <span
        class="inline-block text-sm font-medium border border-primary-500 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
        <slot>{{ text }}</slot>
    </span>

</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    text: {
        type: String,
        default: 'Text here',
    },
    to: {
        type: [String, Object],
        required: true,
    },
});
</script>
