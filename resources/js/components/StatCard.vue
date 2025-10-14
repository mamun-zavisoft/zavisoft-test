<template>
    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0" :class="iconBgColor">
                    <component :is="icon" class="h-6 w-6 text-white" />
                </div>
                <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            {{ name }}
                        </dt>
                        <dd>
                            <div class="text-lg font-medium text-gray-900">
                                {{ value }}
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-5 py-3" :class="trendBgColor">
            <div class="text-sm">
                <span class="font-medium" :class="trendTextColor">
                    {{ change }}
                </span>
                <span> {{ trend === 'up' ? 'increase' : 'decrease' }} from last month</span>
            </div>
        </div>
    </div>
</template>

<script setup>
    import {
        computed
    } from 'vue';

    const props = defineProps({
        name: {
            type: String,
            required: true
        },
        value: {
            type: [String, Number],
            required: true
        },
        change: {
            type: String,
            required: true
        },
        trend: {
            type: String,
            validator: value => ['up', 'down'].includes(value),
            default: 'up'
        },
        icon: {
            type: [Object, Function],
            required: true
        }
    });

    const iconBgColor = computed(() => ({
        'bg-indigo-500': props.trend === 'up',
        'bg-red-500': props.trend === 'down'
    }));

    const trendBgColor = computed(() => ({
        'bg-green-50': props.trend === 'up',
        'bg-red-50': props.trend === 'down'
    }));

    const trendTextColor = computed(() => ({
        'text-green-600': props.trend === 'up',
        'text-red-600': props.trend === 'down'
    }));
</script>
