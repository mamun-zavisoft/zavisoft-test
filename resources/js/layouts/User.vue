<template>
    <div class="min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <div class="flex-1 flex flex-col min-h-0 bg-indigo-700">
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-4">
                        <h1 class="text-white text-xl font-bold">User Panel</h1>
                    </div>
                    <nav class="mt-5 flex-1 px-2 space-y-1">
                        <router-link v-for="item in navigation" :key="item.name" :to="item.to"
                            class="group flex items-center px-2 py-2 text-sm font-medium rounded-md text-indigo-100 hover:bg-indigo-600 hover:bg-opacity-75"
                            active-class="bg-indigo-800 text-white">
                            <component :is="item.icon" class="mr-3 h-5 w-5" />
                            {{ item . name }}
                        </router-link>
                        <button @click="handleLogout" :disabled="loading"
                            class="mt-6 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span v-if="!loading">Logout</span>
                            <span v-else class="flex items-center justify-center">
                                <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                        stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                Logging out...
                            </span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="md:pl-64 flex flex-col">
            <!-- Top navigation -->
            <div class="sticky top-0 z-10 bg-white shadow-sm">
                <div class="flex items-center justify-between h-16 px-4">
                    <div class="flex items-center">
                        <button class="md:hidden mr-2">
                            <Bars3Icon class="h-6 w-6" />
                        </button>
                        <h2 class="text-lg font-medium text-gray-900">{{ currentRouteName }}</h2>
                    </div>
                    <div class="flex items-center">
                        <!-- User dropdown -->
                    </div>
                </div>
            </div>

            <!-- Page content -->
            <main class="flex-1 p-6">
                <slot />
            </main>
        </div>
    </div>
</template>

<script setup>
    import {
        useAuthStore
    } from '@/stores/auth'
    import {
        ref,
        computed
    } from 'vue';
    import {
        useRoute,
        useRouter
    } from 'vue-router';
    import {
        HomeIcon,
        Bars3Icon
    } from '@heroicons/vue/24/outline';

    const authStore = useAuthStore()
    const route = useRoute()
    const router = useRouter()
    const loading = ref(false)

    const navigation = ref([{
        name: 'Dashboard',
        to: '/user/dashboard',
        icon: HomeIcon
    }]);

    const handleLogout = async () => {
        loading.value = true
        try {
            await authStore.logout()
            await router.push('/login')
        } catch (error) {
            console.error('Logout failed:', error)
        } finally {
            loading.value = false
        }
    }

    const currentRouteName = computed(() => {
        const item = navigation.value.find(item => item.to === route.path);
        return item ? item.name : '';
    });
</script>
