<template>
    <div class="grid grid-cols-4 lg:grid-cols-7 grid-tech">
        <div v-for="(tech, index) in techStack" :key="tech.name" :class="[
            'flex items-center justify-center py-6 md:py-8 lg:py-12 border-neutral-200',
            !isLastColumn(index) && 'border-r',
            !isInLastRow(index) && 'border-b'
        ]">
            <img class="h-12 md:h-16 lg:h-20 w-auto" :src="tech.icon" :alt="tech.name" />
        </div>
    </div>

</template>

<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue';

const techStack = [
    { name: "Laravel", icon: new URL('@/assets/images/tech/laravel.svg', import.meta.url).href },
    { name: "Slack", icon: new URL('@/assets/images/tech/slack.svg', import.meta.url).href },
    { name: "React", icon: new URL('@/assets/images/tech/react.svg', import.meta.url).href },
    { name: "Next JS", icon: new URL('@/assets/images/tech/nextjs.svg', import.meta.url).href },
    { name: "Vue JS", icon: new URL('@/assets/images/tech/vue.svg', import.meta.url).href },
    { name: "Express JS", icon: new URL('@/assets/images/tech/expressjs.svg', import.meta.url).href },
    { name: "Selenium", icon: new URL('@/assets/images/tech/selenium.svg', import.meta.url).href },
    { name: "MySql", icon: new URL('@/assets/images/tech/mysql.svg', import.meta.url).href },
    { name: "Flutter", icon: new URL('@/assets/images/tech/flutter.svg', import.meta.url).href },
    { name: "Click Up", icon: new URL('@/assets/images/tech/clickup.svg', import.meta.url).href },
    { name: "TypeScript", icon: new URL('@/assets/images/tech/typescript.svg', import.meta.url).href },
    { name: "Figma", icon: new URL('@/assets/images/tech/figma.svg', import.meta.url).href },
    { name: "Jira", icon: new URL('@/assets/images/tech/jira.svg', import.meta.url).href },
    { name: "Dart", icon: new URL('@/assets/images/tech/dart.svg', import.meta.url).href },

];

const columns = ref(7);
const totalItems = computed(() => techStack.length);

const getColumnsForWidth = (width) => {
    if (width >= 1024) return 7;
    if (width >= 768) return 5;
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
