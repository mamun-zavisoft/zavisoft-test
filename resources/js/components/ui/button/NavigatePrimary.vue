<template>
    <button @click="redirectTo"
        class="flex items-center justify-center gap-2 px-6 py-1.5 rounded-full font-semibold text-white bg-primary-500 hover:bg-primary-600 focus:ring-0 focus:ring-transparent transition-all duration-200 cursor-pointer">
        <slot>{{ text }}</slot>
        <span name="icon" class="bg-white rounded-full p-2 ml-0.5 mr-[-16px]">
            <img src="@/assets/images/icons/r_arw_primary_20.svg" alt="">
        </span>
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
