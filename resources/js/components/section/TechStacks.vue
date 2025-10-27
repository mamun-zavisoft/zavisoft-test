<template>
    <div v-for="(tech, index) in techStack" :key="tech.name" :class="[
        'flex items-center justify-center p-6 border-neutral-200',
        !isLastColumn(index) && 'border-r',
        !isInLastRow(index) && 'border-b'
    ]">
        <img class="h-12 w-auto" :src="tech.icon" :alt="tech.name" />
    </div>
</template>

<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

const techStack = [
    { name: "Figma", icon: new URL('@/assets/images/tech/figma.svg', import.meta.url).href },
    { name: "Python", icon: new URL('@/assets/images/tech/python.svg', import.meta.url).href },
    { name: "Confluence", icon: new URL('@/assets/images/tech/confluence.svg', import.meta.url).href },
    { name: "Bitbucket", icon: new URL('@/assets/images/tech/bitbucket.svg', import.meta.url).href },
    { name: "Cypress", icon: new URL('@/assets/images/tech/cypress.svg', import.meta.url).href },
    { name: "Discord", icon: new URL('@/assets/images/tech/discord.svg', import.meta.url).href },
    { name: "JavaScript", icon: new URL('@/assets/images/tech/js.svg', import.meta.url).href },
    { name: "Angular", icon: new URL('@/assets/images/tech/angular.svg', import.meta.url).href },
    { name: "React", icon: new URL('@/assets/images/tech/react.svg', import.meta.url).href },
    { name: "Unit", icon: new URL('@/assets/images/tech/unit.svg', import.meta.url).href },
    { name: "Vue", icon: new URL('@/assets/images/tech/vue.svg', import.meta.url).href },
    { name: "Laravel", icon: new URL('@/assets/images/tech/laravel.svg', import.meta.url).href },

];

const columns = ref(6);
const totalItems = computed(() => techStack.length);

const getColumnsForWidth = (width) => {
    if (width >= 1024) return 6;
    if (width >= 768) return 4;
    if (width >= 640) return 4;
    return 4;
};

const updateColumns = () => {
    if (typeof window === 'undefined') {
        return;
    }

    columns.value = getColumnsForWidth(window.innerWidth);
};

onMounted(() => {
    updateColumns();
    window.addEventListener('resize', updateColumns);
});

onBeforeUnmount(() => {
    window.removeEventListener('resize', updateColumns);
});

const lastRowStartIndex = computed(() => {
    const currentColumns = columns.value || 1;
    if (totalItems.value === 0) {
        return 0;
    }

    const remainder = totalItems.value % currentColumns;
    const visibleColumns = remainder === 0 ? currentColumns : remainder;
    return totalItems.value - visibleColumns;
});

const isLastColumn = (index) => {
    const currentColumns = columns.value || 1;
    const isMultiple = (index + 1) % currentColumns === 0;
    const isLastItem = index === totalItems.value - 1;

    return isMultiple || isLastItem;
};

const isInLastRow = (index) => index >= lastRowStartIndex.value;

</script>
