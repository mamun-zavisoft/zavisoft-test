<template>
    <div class="space-y-6">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-900">Admin Dashboard</h1>
            <div class="flex space-x-4">
                <button class="btn-primary">
                    <PlusIcon class="h-5 w-5 mr-2" />
                    Add New
                </button>
            </div>
        </div>


    </div>
</template>

<script setup>
import {
    PlusIcon,
    UserGroupIcon,
    ShoppingCartIcon,
    CurrencyDollarIcon,
    ChartBarIcon,
} from '@heroicons/vue/24/outline';

const stats = [{
    name: 'Total Users',
    value: '2,345',
    change: '12%',
    trend: 'up',
    icon: UserGroupIcon,
},
{
    name: 'Total Sales',
    value: '$23,456',
    change: '8%',
    trend: 'up',
    icon: ShoppingCartIcon,
},
{
    name: 'Revenue',
    value: '$12,345',
    change: '3%',
    trend: 'down',
    icon: CurrencyDollarIcon,
},
{
    name: 'Avg. Session',
    value: '3m 45s',
    change: '5%',
    trend: 'up',
    icon: ChartBarIcon,
},
];

const activities = [{
    id: 1,
    user: 'John Doe',
    action: 'created a new product',
    time: '2 hours ago',
},
{
    id: 2,
    user: 'Jane Smith',
    action: 'updated user settings',
    time: '4 hours ago',
},
];
</script>
