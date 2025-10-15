<template>
    <div>
        <h2>Unauthorized</h2>
        <p>{{ message }}</p>
        <router-link :to="homeLink">{{ linkText }}</router-link>
    </div>
</template>
<script setup>
    import {
        computed
    } from 'vue';
    import {
        useAuthStore
    } from '@/stores/auth';

    const authStore = useAuthStore();

    const message = computed(() => {
        return authStore.isAuthenticated
            ? `You don't have enough privilege to access this page.`
            : "You need to login to access this page.";
    });

    const linkText = computed(() => {
        return authStore.isAuthenticated ? "Return to dashboard" : "Go back home";
    });

    const homeLink = computed(() => {
        if (!authStore.isAuthenticated) return "/";
        return authStore.user?.role === 'admin' ?
            "/admin/dashboard" :
            "/user/dashboard";
    });
</script>
