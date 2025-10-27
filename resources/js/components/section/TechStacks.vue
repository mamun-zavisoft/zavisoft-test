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
    { name: "Figma", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg" },
    { name: "Node.js", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg" },
    { name: "Jira", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg" },
    { name: "Bitbucket", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" },
    { name: "Discord", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg" },
    { name: "Java", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" },
    { name: "JavaScript", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" },
    { name: "Angular", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-plain.svg" },
    { name: "React", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" },
    { name: ".NET", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dot-net/dot-net-original.svg" },
    { name: "Laravel", icon: new URL('@/assets/images/icons/laravel.svg', import.meta.url).href },
    { name: "Python", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" },

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
