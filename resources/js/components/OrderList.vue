<template>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Order ID
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Date
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Total
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="order in orders" :key="order.id">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ order . id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ formatDate(order . date) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span :class="statusBadgeClass(order.status)"
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                            {{ order . status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ order . total }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button @click="viewOrder(order)" class="text-primary hover:text-primary-dark mr-4">
                            View
                        </button>
                        <button v-if="order.status === 'Pending'" @click="cancelOrder(order)"
                            class="text-red-600 hover:text-red-900">
                            Cancel
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
    const props = defineProps({
        orders: {
            type: Array,
            required: true,
            validator: (value) => {
                return value.every(item =>
                    item.id &&
                    item.date &&
                    item.status &&
                    item.total
                );
            }
        }
    });

    const emit = defineEmits(['view', 'cancel']);

    const formatDate = (dateString) => {
        const options = {
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        };
        return new Date(dateString).toLocaleDateString(undefined, options);
    };

    const statusBadgeClass = (status) => {
        const statusClasses = {
            'Pending': 'bg-yellow-100 text-yellow-800',
            'Processing': 'bg-blue-100 text-blue-800',
            'Shipped': 'bg-indigo-100 text-indigo-800',
            'Delivered': 'bg-green-100 text-green-800',
            'Cancelled': 'bg-red-100 text-red-800'
        };
        return statusClasses[status] || 'bg-gray-100 text-gray-800';
    };

    const viewOrder = (order) => {
        emit('view', order);
    };

    const cancelOrder = (order) => {
        emit('cancel', order);
    };
</script>
