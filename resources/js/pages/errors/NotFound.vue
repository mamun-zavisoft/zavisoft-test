<template>
    <div>
        <h2>This is the Not Found Page</h2>
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
        if (!authStore.isAuthenticated) return "The page you're looking for doesn't exist.";
        if (authStore.user?.role === 'admin') return "This admin page doesn't exist.";
        return "This page doesn't exist in your account.";
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
