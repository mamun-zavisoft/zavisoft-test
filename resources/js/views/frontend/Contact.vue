<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div class=" pt-24 md:pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3">
                    <div class="flex flex-col items-center gap-4 justify-center ">
                        <h1
                            class=" text-center text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-neutral-900">
                            Have a project idea in mind? <br> <span class="text-neutral-500 text-center">Let's get
                                started.</span>
                        </h1>
                        <p class="text-sm md:text-base text-neutral-600">We create appealing, user-friendly designs that
                            help our clients delight the audience, increase brand awareness.</p>

                    </div>

                </div>
                <!-- Cards -->
                <div
                    class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6 border-b border-neutral-200 mb-6 md:pb-8 lg:pb-12">
                    <!-- Left: contact info card -->
                    <div class="rounded-lg border border-neutral-300 bg-white p-4 lg:p-6">
                        <div class=" flex flex-col gap-4 md:gap-6 justify-between h-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <!-- Give us a call -->
                                <div>
                                    <p class="text-sm font-medium text-neutral-500">Give us a call</p>
                                    <p class="mt-3 text-neutral-900">01729–645913</p>
                                </div>

                                <!-- Email us -->
                                <div>
                                    <p class="text-sm font-medium text-neutral-500">Email us</p>
                                    <p class="mt-3 text-neutral-900">Zavisoft@gmail.com</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 gap-6">
                                <!-- Socials -->
                                <div>
                                    <p class="text-sm font-medium text-neutral-500">Follow us</p>
                                    <div class="mt-3 flex items-center gap-3">
                                        <!-- Simple icon buttons -->
                                        <a href="#"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="h-4 w-4 text-neutral-700">
                                                <path
                                                    d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.7-1.3 1.2V12h2.2l-.3 3h-1.9v7A10 10 0 0 0 22 12Z" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="h-4 w-4 text-neutral-700">
                                                <path
                                                    d="M12 2.2C6.5 2.2 2 6.7 2 12.2c0 4.4 2.9 8.1 6.9 9.4.5.1.7-.2.7-.5v-1.9c-2.8.6-3.4-1.2-3.4-1.2-.5-1.1-1.1-1.4-1.1-1.4-.9-.6.1-.6.1-.6 1 .1 1.6 1 1.6 1 .9 1.6 2.5 1.1 3.1.8.1-.6.3-1.1.5-1.3-2.3-.3-4.7-1.1-4.7-5 0-1.1.4-2 1-2.7-.1-.3-.5-1.4.1-2.8 0 0 .9-.3 2.8 1a9.4 9.4 0 0 1 5.1 0c1.9-1.3 2.8-1 2.8-1 .6 1.4.2 2.5.1 2.8.7.7 1 1.6 1 2.7 0 3.9-2.4 4.7-4.8 5 .3.3.6.8.6 1.5v2.3c0 .3.2.6.7.5 4-1.3 6.9-5 6.9-9.4 0-5.5-4.5-10-10-10Z" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 16 16" class="h-4 w-4 text-neutral-700">
                                                <path
                                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0Zm2.16 4.89c.66 0 1.2.54 1.2 1.2 0 .66-.54 1.2-1.2 1.2-.66 0-1.2-.54-1.2-1.2 0-.66.54-1.2 1.2-1.2ZM6.22 6.22h1.56v6.67H6.22V6.22Zm.78-2.44a.9.9 0 1 1 0 1.8.9.9 0 0 1 0-1.8Zm2.66 2.44h1.49v.91h.02c.21-.39.72-.8 1.49-.8 1.6 0 1.9 1.06 1.9 2.43v4.13h-1.55V9.35c0-.6-.01-1.36-.83-1.36-.84 0-.97.65-.97 1.32v3.58H9.66V6.22Z" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-full  bg-neutral-50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="h-4 w-4 text-neutral-700">
                                                <path
                                                    d="M20 2H4C2.9 2 2 2.9 2 4v16c0 1.1.9 2 2 2h8v-7H9v-3h3V9.5C12 6.5 13.8 5 16.5 5c1.2 0 2.4.1 2.5.1v3h-1.7c-1.3 0-1.3.6-1.3 1.3V12h3l-.5 3h-2.5v7H20c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div>
                                    <p class="text-sm font-medium text-neutral-500">Address</p>
                                    <p class="mt-2 max-w-sm text-neutral-900">House #44, Road 02, ASA Center, Zigatola,
                                        Dhanmondi-1209
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: form card -->
                    <div class="rounded-lg border border-neutral-300 p-4 lg:p-6 bg-neutral-50">
                        <form action="#" method="post" class="space-y-5">
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
                                <textarea id="details" name="details" rows="4" placeholder="Type here"
                                    class="rounded-lg border border-neutral-200 bg-white px-3 text-sm text-neutral-900 outline-none ring-0 focus:border-primary-500"></textarea>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit"
                                    class="inline-flex items-center justify-center rounded-full bg-primary-500 px-6 py-3 text-sm font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500">Send
                                    a Brief</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div>
                <h5 class=" text-base font-semibold text-neutral-900 text-center mb-3">Our recent clients & partners
                </h5>
                <PartnerMarquee />
                <PartnerMarquee :reverse="true" />
            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12 bg-primary-50">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="h-full flex flex-col justify-between">
                    <div class="">
                        <span
                            class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-3">
                            Career opportunities
                        </span>
                        <h2 class="text-2xl lg:text-3xl font-bold text-neutral-900 leading-snug">
                            Maximize Your Software Development Potential with Us
                        </h2>
                        <p class="text-sm lg:text-base text-neutral-600 mt-6 md:mt-8 lg:mt-10">With our innovative
                            solutions and committed
                            expertise, success is a guaranteed outcome. Let’s
                            accelerate
                            together towards your goals—and beyond.
                            We are close-knit company that’s been committed from the start to forging our own path, not
                            simply
                            following modern management trends. For example, we don’t adopt Scrum by the book or through
                            standard
                            training, but instead, we focus on creating the ideal conditions to implement the best
                            practices.</p>
                    </div>
                    <div class="">
                        <NavigatePrimary text="Let’s join our team" to="/contact" class="mt-4 md:mt-6 lg:mt-8" />
                    </div>
                </div>
                <div class="pl-0 md:pl-6 lg:pl-8">
                    <img src="@/assets/images/career_img.png" alt=""
                        class="w-full h-auto rounded-tl-[50px] md:rounded-tl-[100px] lg:rounded-tl-[300px]">
                </div>
            </div>
        </div>
    </section>

</template>

<script setup>
import bgImg from '@/assets/images/career_bg.svg';
import PartnerMarquee from '@/components/ui/slider/PatnerMarquee.vue';



</script>