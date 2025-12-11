<template>
    <div class="pb-60 pt-20">
        <div class="w-full max-w-xl bg-white rounded-2xl mx-auto px-4 py-6 sm:p-12 text-center">
            <svg class="mx-auto h-20 w-20 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
            </svg>

            <h1 class="mt-6 text-3xl font-medium text-gray-900">Thank you for applying</h1>
            <p class="mt-3 text-gray-600 max-w-xl mx-auto">
                Your application has been received. We will contact
                you shortly regarding the next steps.
            </p>

            <div v-if="slug" class="mt-6">
                <div
                    class="inline-flex items-center rounded-full bg-green-50 px-3 py-1 text-sm font-medium text-green-800">
                    <span class="sr-only">Applied for:</span>
                    <svg class="mr-2 h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l4 2" />
                    </svg>

                </div>
            </div>
        </div>
    </div>
</template>