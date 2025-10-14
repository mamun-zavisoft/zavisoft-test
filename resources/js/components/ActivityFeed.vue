<template>
    <div class="flow-root">
        <ul class="-mb-8">
            <li v-for="(activity, index) in activities" :key="activity.id">
                <div class="relative pb-8">
                    <span v-if="index !== activities.length - 1"
                        class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true" />
                    <div class="relative flex space-x-3">
                        <div>
                            <span
                                class="h-8 w-8 rounded-full bg-indigo-500 flex items-center justify-center ring-8 ring-white">
                                <UserIcon class="h-5 w-5 text-white" />
                            </span>
                        </div>
                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                            <div>
                                <p class="text-sm text-gray-800">
                                    <span class="font-medium text-gray-900">{{ activity . user }}</span>
                                    {{ activity . action }}
                                </p>
                            </div>
                            <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                <time :datetime="activity.time">{{ activity . time }}</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>

<script setup>
    import {
        UserIcon
    } from '@heroicons/vue/24/outline';

    defineProps({
        activities: {
            type: Array,
            required: true,
            validator: (value) => {
                return value.every(item =>
                    item.id &&
                    item.user &&
                    item.action &&
                    item.time
                );
            }
        }
    });
</script>
