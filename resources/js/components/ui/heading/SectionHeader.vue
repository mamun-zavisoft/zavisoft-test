<template>
  <span
    class="wow animate__animated animate__pulse inline-block text-sm font-medium border border-primary-500 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">

    <!-- Render text normally -->
    <slot>{{ text }}</slot>

  </span>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    text: {
        type: String,
        default: 'Text here',
    }
});
</script>
