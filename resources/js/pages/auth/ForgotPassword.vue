<template>
    <div class="text-center">
        <LockClosedIcon class="mx-auto h-12 w-12 text-gray-400" />
        <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Forgot your password?</h2>
        <p class="mt-2 text-sm text-gray-600">
            Enter your email and we'll send you a link to reset your password.
        </p>
    </div>

    <form class="mt-8 space-y-6" @submit.prevent="handleSubmit">
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="mt-1">
                <input id="email" v-model="email" type="email" required class="input-field" />
            </div>
        </div>

        <div>
            <button type="submit" class="btn-primary w-full">
                Send reset link
            </button>
        </div>
    </form>

    <div class="mt-6 text-center">
        <router-link to="/login" class="font-medium text-primary hover:text-primary-dark">
            Remember your password? Sign in
        </router-link>
    </div>
</template>

<script setup>
    import {
        ref
    } from 'vue';
    
    import {
        LockClosedIcon
    } from '@heroicons/vue/24/outline';

    const email = ref('');

    const handleSubmit = async () => {
        // Implement password reset logic
        console.log('Sending reset link to:', email.value);
    };
</script>
