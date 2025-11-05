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
                            01729–645913</p>
                    </div>

                    <!-- Email us -->
                    <div>
                        <p class="text-base font-medium text-neutral-500 wow animate__zoomIn animate__animated">Email us
                        </p>
                        <p class="mt-3 text-neutral-900 text-lg font-medium wow animate__zoomIn animate__animated">
                            Zavisoft@gmail.com</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 md:gap-10">
                    <!-- Socials -->
                    <div>
                        <p class="text-base font-medium text-neutral-500 wow animate__zoomIn animate__animated">Follow
                            us</p>
                        <div class="mt-4 flex items-center gap-3 wow animate__zoomIn animate__animated">
                            <!-- Simple icon buttons -->
                            <a href="#"
                                class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                <img src="@/assets/images/icons/facebooks.svg" alt="">
                            </a>
                            <a href="#"
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
            <form @submit.prevent="submitForm" class="space-y-5 wow animate__animated animate__fadeInUp">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="name" class="text-sm font-medium text-neutral-600">Your Name</label>
                        <input id="name" name="name" type="text" placeholder="Type your name"
                            class="h-10 rounded-full border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-medium text-neutral-600">Email</label>
                        <input id="email" name="email" type="email" placeholder="you@gmail.com"
                            class="h-10 rounded-full border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500" />
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <label for="service" class="text-sm font-medium text-neutral-600 mb-2">Service
                        name</label>
                    <div class="relative">
                        <select id="service" name="service"
                            class="h-10 w-full appearance-none rounded-full border border-neutral-200 bg-white pl-3 pr-9 text-sm text-neutral-900 focus:border-primary-500">
                            <option value="" selected>Select here</option>
                            <option>UI/UX Design</option>
                            <option>Web Development</option>
                            <option>Mobile App (Flutter)</option>
                            <option>Branding</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="details" class="text-sm font-medium text-neutral-600">Project
                        details*</label>
                    <textarea id="details" name="details" rows="3" placeholder="Type here"
                        class="rounded-lg border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="cursor-pointer inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500">Send
                        a Brief</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>

const submitForm = async () => {

}
</script>