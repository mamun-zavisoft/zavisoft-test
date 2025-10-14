<template>
    <div class="space-y-6">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-primary to-primary-dark rounded-lg p-6 text-white">
            <h1 class="text-2xl font-bold">Welcome back, {{ user . name }}!</h1>
            <p class="mt-2">Here's what's happening with your account today.</p>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
            <button v-for="action in quickActions" :key="action.name"
                class="bg-white p-4 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
                <component :is="action.icon" class="h-8 w-8 mx-auto text-primary" />
                <span class="mt-2 block text-sm font-medium">{{ action . name }}</span>
            </button>
        </div>

        <!-- Recent Orders -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-lg font-medium text-gray-900">Recent Orders</h2>
            </div>
            <OrderList :orders="recentOrders" />
        </div>
    </div>
</template>

<script setup>
    import {
        ref
    } from 'vue';
    import OrderList from '@/components/OrderList.vue';
    import {
        CreditCardIcon,
        DocumentTextIcon,
        CogIcon,
        BellIcon,
    } from '@heroicons/vue/24/outline';

    const user = ref({
        name: 'John Doe',
        email: 'john@example.com',
    });

    const quickActions = [{
            name: 'Payments',
            icon: CreditCardIcon
        },
        {
            name: 'Documents',
            icon: DocumentTextIcon
        },
        {
            name: 'Settings',
            icon: CogIcon
        },
        {
            name: 'Notifications',
            icon: BellIcon
        },
    ];

    const recentOrders = [{
            id: '#12345',
            date: '2023-05-15',
            status: 'Delivered',
            total: '$89.99',
        },
        {
            id: '#67890',
            date: '2023-05-10',
            status: 'Processing',
            total: '$49.99',
        }
    ];
</script>
