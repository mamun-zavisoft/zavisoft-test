<template>

    <!-- Cards -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-neutral-200 mb-6 md:pb-8 lg:pb-12">
        <!-- Left: contact info card -->
        <div class="rounded-lg border border-neutral-300 bg-white p-4 lg:p-6 wow animate__animated animate__fadeInUp">
            <div class=" flex flex-col gap-4 md:gap-6 justify-between h-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-4 lg:gap-8">
                    <!-- Give us a call -->
                    <div>
                        <p class="text-base font-medium text-neutral-500 wow animate__zoomIn animate__animated">Give us
                            a call</p>
                        <p class="mt-3 text-neutral-900 text-lg font-medium wow animate__zoomIn animate__animated">
                            01886660016</p>
                    </div>

                    <!-- Email us -->
                    <div>
                        <p class="text-base font-medium text-neutral-500 wow animate__zoomIn animate__animated">Email us
                        </p>
                        <p class="mt-3 text-neutral-900 text-lg font-medium wow animate__zoomIn animate__animated">
                            info@zavisoft.com</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:gap-10">
                    <!-- Socials -->
                    <div>
                        <p class="text-base font-medium text-neutral-500 wow animate__zoomIn animate__animated">Follow
                            us</p>
                        <div class="mt-4 flex items-center gap-3 wow animate__zoomIn animate__animated">
                            <!-- Simple icon buttons -->
                            <a href="https://www.facebook.com/zavisoft" target="_blank"
                                class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                <img src="@/assets/images/icons/facebooks.svg" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/zavisoft/" target="_blank"
                                class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                <img src="@/assets/images/icons/linkedine.svg" alt="">

                            </a>
                            <a href="#"
                                class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                <img src="@/assets/images/icons/youtube.svg" alt="">

                            </a>
                            <a href="#"
                                class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                <img src="@/assets/images/icons/instagram.svg" alt="">

                            </a>

                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex flex-col gap-5">
                        <p class="text-base font-medium text-neutral-500">Address</p>
                        <p class=" max-w-sm text-neutral-900 text-base md:text-lg font-medium">House #44, Road 02, ASA
                            Center,
                            Zigatola,
                            Dhanmondi-1209
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: form card -->
        <div class="rounded-lg border border-neutral-300 p-4 lg:p-6 bg-neutral-50">
            <form @submit.prevent="submitForm" class="space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="name" class="text-sm font-medium text-neutral-600">Your Name *</label>
                        <input v-model="form.name" id="name" name="name" type="text" placeholder="Type your name"
                            class="h-10 rounded-full border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                        <p v-if="errors.name" class="text-red-600 text-xs">{{ errors.name[0] }}</p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-medium text-neutral-600">Email *</label>
                        <input v-model="form.email" id="email" name="email" type="email" placeholder="you@gmail.com"
                            class="h-10 rounded-full border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                        <p v-if="errors.email" class="text-red-600 text-xs">{{ errors.email[0] }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <label for="service" class="text-sm font-medium text-neutral-600 mb-2">Service name *</label>
                    <div class="relative">
                        <select v-model="form.service_name" id="service" name="service_name"
                            class="h-10 w-full appearance-none rounded-full border border-neutral-200 bg-white pl-3 pr-9 text-sm text-neutral-900 focus:border-primary-500">
                            <option value="" disabled>Select here</option>
                            <option value="UI/UX Design">UI/UX Design & Audit</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="QA Testing">QA Testing</option>
                            <option value="Database Management">Database Management</option>
                        </select>
                    </div>
                    <p v-if="errors.service_name" class="text-red-600 text-xs mt-2">{{ errors.service_name[0] }}</p>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="project_details" class="text-sm font-medium text-neutral-600">Project details *</label>
                    <textarea v-model="form.project_details" id="project_details" name="project_details" rows="3"
                        placeholder="Type here"
                        class="rounded-lg border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500"></textarea>
                    <p v-if="errors.project_details" class="text-red-600 text-xs">{{ errors.project_details[0] }}</p>
                </div>

                <div class="flex justify-end items-center gap-3">
                    <span v-if="serverMessage" class="text-sm">{{ serverMessage }}</span>
                    <button :disabled="loading" type="submit"
                        class="cursor-pointer inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500">
                        {{ loading ? 'Sending...' : 'Send a Brief' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>


<script setup>
const serverMessage = ref('')
import { reactive, ref } from 'vue'
import { useToast } from 'vue-toastification'

const toast = useToast()

const form = reactive({
    name: '',
    email: '',
    service_name: '',
    project_details: ''
})

const loading = ref(false)
const errors = ref({})

// simple regex for basic email pattern
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

const validateForm = () => {
    const e = {}

    if (!form.name.trim()) e.name = ['Name is required.']
    if (!form.email.trim()) e.email = ['Email is required.']
    else if (!emailPattern.test(form.email)) e.email = ['Invalid email address.']
    if (!form.service_name) e.service_name = ['Please select a service.']
    if (!form.project_details.trim()) e.project_details = ['Project details are required.']

    errors.value = e
    return Object.keys(e).length === 0
}

const submitForm = async () => {
    // client-side validation
    if (!validateForm()) {
        // toast.error('Please fill all required fields correctly.')
        return
    }

    loading.value = true

    try {
        const res = await fetch(`/api/contact-us`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(form),
        })

        if (res.status === 422) {
            const json = await res.json()
            errors.value = json.errors || {}
            toast.error('Please correct the highlighted fields.')
            return
        }

        if (!res.ok) throw new Error('Network error')

        const data = await res.json()

        toast.success(data.message || 'Message sent successfully!')
        Object.keys(form).forEach(k => (form[k] = ''))
    } catch (e) {
        toast.error('Something went wrong. Please try again.')
    } finally {
        loading.value = false
    }
}
</script>
