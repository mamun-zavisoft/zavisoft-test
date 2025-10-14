<template>
    <form class="mt-8 space-y-6" @submit.prevent="handleRegister">
        <div class="rounded-md shadow-sm space-y-4">
            <div>
                <label for="name" class="sr-only">Full Name</label>
                <input id="name" v-model="form.name" name="name" type="name" autocomplete="name" required
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Full Name" :disabled="loading" />
            </div>
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input id="email" v-model="form.email" name="email" type="email" autocomplete="email" required
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Email address" :disabled="loading" />
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" v-model="form.password" name="password" type="password"
                    autocomplete="current-password" required
                    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Password" :disabled="loading" />
            </div>
        </div>

        <div>
            <button type="submit"
                class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                :disabled="loading" :class="{ 'opacity-75 cursor-not-allowed': loading }">
                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <svg v-if="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                </span>
                {{ loading ? 'Signing in...' : 'Sign in' }}
            </button>
        </div>

        <div v-if="error" class="text-red-500 text-sm text-center">
            {{ error }}
        </div>

        <div class="flex items-center justify-between">
            <div class="text-sm">
                <router-link to="/login" class="font-medium text-primary hover:text-primary-dark"
                    :class="{ 'pointer-events-none opacity-50': loading }">
                    Already have an account?
                </router-link>
            </div>
        </div>
    </form>
</template>

<script setup>
    import {
        ref
    } from 'vue';
    import {
        useRouter
    } from 'vue-router';
    import {
        useAuthStore
    } from '@/stores/auth';

    const authStore = useAuthStore();
    const router = useRouter();

    const form = ref({
        name: '',
        email: '',
        password: ''
    });

    const loading = ref(false);
    const error = ref('');

    const handleRegister = async () => {
        error.value = '';
        loading.value = true;

        // Basic client-side validation
        if (!form.value.email || !form.value.password || !form.value.name) {
            error.value = 'Please fill in all fields';
            loading.value = false;
            return;
        }

        await authStore.register(form.value);
        
        loading.value = false;

        router.push('/verify-email');
    };
</script>
