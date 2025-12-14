<template>

    <section class="mb-10">
        <div class="container">
            <div class="max-w-[700px] mx-auto">
                <form @submit.prevent="submitForm" class="space-y-5 bg-neutral-50 rounded-2xl p-6">
                    <div class="grid grid-cols-1">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-sm font-medium text-neutral-600">Your Name *</label>
                            <input v-model="form.name" id="name" name="name" type="text" placeholder="Type your name"
                                class="placeholder:text-[13px] h-10 rounded-full border border-transparent bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            <p v-if="errors.name" class="text-red-600 text-xs mt-1">{{ errors.name[0] }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="flex flex-col gap-2">
                            <label for="email" class="text-sm font-medium text-neutral-600">Email *</label>
                            <input v-model="form.email" id="email" name="email" type="email" placeholder="you@gmail.com"
                                class="placeholder:text-[13px] h-10 rounded-full border border-transparent bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            <p v-if="errors.email" class="text-red-600 text-xs mt-1">{{ errors.email[0] }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="flex flex-col gap-2">
                            <label for="phone" class="text-sm font-medium text-neutral-600">Phone No *</label>
                            <input v-model="form.phone" id="phone" name="phone" type="tel" placeholder="Phone No"
                                class="placeholder:text-[13px] h-10 rounded-full border border-transparent bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            <p v-if="errors.phone" class="text-red-600 text-xs mt-1">{{ errors.phone[0] }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="flex flex-col gap-2">
                            <label for="github" class="text-sm font-medium text-neutral-600">Github link</label>
                            <input v-model="form.github" id="github" name="github" type="text" placeholder="Type here"
                                class="placeholder:text-[13px] h-10 rounded-full border border-transparent bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            <!-- <p v-if="errors.github" class="text-red-600 text-xs mt-1">{{ errors.github[0] }}</p> -->
                        </div>
                    </div>
                    <div class="grid grid-cols-1">
                        <div class="flex flex-col gap-2">
                            <label for="linkedin" class="text-sm font-medium text-neutral-600">Linkedin
                                link</label>
                            <input v-model="form.linkedin" id="linkedin" name="linkedin" type="text"
                                placeholder="Type here"
                                class="placeholder:text-[13px] h-10 rounded-full border border-transparent bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                            <!-- <p v-if="errors.linkedin" class="text-red-600 text-xs mt-1">{{ errors.linkedin[0] }}</p> -->
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="details" class="text-sm font-medium text-neutral-600">About Your self *</label>
                        <textarea v-model="form.about" id="details" name="about" rows="4" placeholder="Type here"
                            class="placeholder:text-[13px] rounded-lg border border-transparent bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500"></textarea>
                        <p v-if="errors.about" class="text-red-600 text-xs mt-1">{{ errors.about[0] }}</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="details" class="text-sm font-medium text-neutral-600">Attach CV/Resume *</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file"
                                class="flex flex-col items-center justify-center w-full  border-2 border-neutral-300 border-dashed rounded-lg cursor-pointer bg-neutral-50  ">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-neutral-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-neutral-500 "><span class="font-semibold">Click to
                                            upload</span></p>
                                    <p class="text-xs text-neutral-500 ">PDF (MAX.
                                        2048kb)</p>
                                </div>
                                <input id="dropzone-file" accept="pdf" type="file" @change="handleFile"
                                    class="hidden" />
                            </label>
                        </div>
                        <p v-if="fileName" class="text-xs mt-2">{{ fileName }}</p>
                        <p v-if="errors.cv" class="text-red-600 text-xs">{{ errors.cv[0] }}</p>
                    </div>

                    <div class="flex justify-end">

                        <button :disabled="loading" type="submit"
                            class="cursor-pointer inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            {{ loading ? 'Submiting...' : 'Submit' }}
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </section>


</template>


<script setup>
import { ref } from 'vue'
import { useToast } from 'vue-toastification'
import {  useRouter } from 'vue-router'


const router = useRouter()
const jobId = router.options.history.state.id


const toast = useToast()

// Reactive form
const form = ref({
    name: '',
    email: '',
    phone: '',
    github: '',
    linkedin: '',
    about: '',
    job_id: jobId,
})



const cv = ref()
const fileName = ref('')
const loading = ref(false)
const errors = ref({})

// Simple email regex
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//validate phone no
const phonePattern = /^(?:\+88|88)?01[3-9]\d{8}$/;

const validateForm = () => {
    const e = {};

    // Required fields
    if (!form.value.name.trim()) e.name = ["Name is required."];

    if (!form.value.email.trim()) e.email = ["Email is required."];
    else if (!emailPattern.test(form.value.email)) e.email = ["Invalid email address."];

    const phone = String(form.value.phone || '').trim();
    if (!phone) {
        e.phone = ["Phone number is required."];
    } else {
        // Remove any spaces, dashes, or other characters
        const cleanPhone = phone.replace(/\s+|-|\(|\)/g, '');

        // Bangladesh phone validation
        if (!phonePattern.test(cleanPhone)) {
            e.phone = ["Invalid Bangladesh phone number. Use format: 01712345678 or +8801712345678"];
        }
    }

    if (!form.value.about.trim()) e.about = ["About yourself is required."];

    if (!cv.value) {
        e.cv = ["CV is required."];
    } else {
        const allowedTypes = ["application/pdf"];
        const maxSize = 2 * 1024 * 1024; // 2MB

        if (!allowedTypes.includes(cv.value.type)) {
            e.cv = ["CV must be a PDF file."];
        } else if (cv.value.size > maxSize) {
            e.cv = ["CV must be smaller than 2MB."];
        }
    }

    // Assign errors
    errors.value = e;

    // Return true if no errors
    return Object.keys(e).length === 0;
}


// File handler
const handleFile = (event) => {
    cv.value = event.target.files[0]
    fileName.value = cv.value?.name || ''
}

const createFormData = () => {


    const formData = new FormData()

    Object.keys(form.value).forEach(key => {
        formData.append(key, form.value[key])
    })

    if (cv.value) {
        formData.append("cv", cv.value)
    }

    return formData
}


// Submit form
const submitForm = async () => {
    if (!validateForm()) {
        return;
    }

    loading.value = true

    const formData = createFormData()

    try {
        const res = await fetch(`/api/job-application`, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
            },
            body: formData,
        })


        if (res.status === 422) {
            const json = await res.json()
            errors.value = Object.fromEntries(
                Object.entries(json.errors).map(([key, value]) => [key, value])
            )
            // toast.error(errors.message)
            return
        }

        if (!res.ok) throw new Error('Network error')

        const data = await res.json()
        toast.success(data.message || 'Message sent successfully!')

        // Reset form
        Object.keys(form.value).forEach(k => form.value[k] = '')
        cv.value = null
        fileName.value = ''
        errors.value = {}
        router.push('/success')

    } catch (error) {
        toast.error('Something went wrong. Please try again.')
    } finally {
        loading.value = false
    }
}
</script>
