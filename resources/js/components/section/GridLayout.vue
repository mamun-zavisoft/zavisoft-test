<!-- <template>
    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
            alt="Figma">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
            alt="Node.js">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg"
            alt="Jira">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto"
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg" alt="Bitbucket">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto"
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg" alt="Discord">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg"
            alt="Java">
    </div>
    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto"
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
            alt="JavaScript">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-plain.svg"
            alt="Angular">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
            alt="React">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dot-net/dot-net-original.svg"
            alt=".NET">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg"
            alt="Laravel">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg"
            alt="Python">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto"
            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cypressio/cypressio-original.svg" alt="Cypress">
    </div>

    <div class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg"
            alt="Figma">
    </div>


   
</template>
 -->
<template>
    <div v-for="(tech, index) in techStack" :key="index" class="flex items-center justify-center p-6">
        <img class="h-12 w-auto" :src="tech.icon" :alt="tech.name" />
    </div>
</template>

<script setup>
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
    { name: "Laravel", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" },
    { name: "Python", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" },
    { name: "Cypress", icon: "cdn.jsdelivr.net/gh/devicons/devicon/icons/cypressio/cypressio-original.svg" },
    { name: "Figma", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg" },
    { name: "Node.js", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bitbucket/bitbucket-original.svg" },
    { name: "Jira", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jira/jira-original.svg" },
    { name: "Bitbucket", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" },
    { name: "Discord", icon: "https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discordjs/discordjs-original.svg" },
];
</script>
