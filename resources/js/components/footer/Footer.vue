<template>
    <footer>
        <div class="relative w-full h-96 sm:h-116 md:h-126 lg:h-146 xl:h-156 bg-no-repeat bg-center bg-cover"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container h-full">
                <div class="w-full h-full lg:w-3xl mx-auto py-16 flex flex-col items-center justify-center">
                    <h1
                        class="wow animate__animated animate__fadeInUp text-2xl md:text-4xl lg:text-6xl text-white text-center font-semibold">
                        Ready to bring
                        your Technology
                        skills with us to the
                        next level?
                    </h1>
                    <p class="mt-8 text-center text-sm text-white md:text-base">Let us know what challenges you are
                        trying to solve
                        so
                        we can help.</p>

                    <div class="flex items-center justify-center mt-8">
                        <a href="#"
                            class=" bg-white w-10 h-10 flex items-center justify-center  p-1.5 lg:p-2 rounded-full ">

                            <img src="@/assets/images/icons/r_arw_primary_20.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#141415]">
            <div class="container">
                <div class="pb-6 md:pb-8">
                    <div class="grid grid-cols-12 gap-6 sm:gap-8 ">

                        <div class="col-span-12 lg:col-span-4 space-y-4 flex flex-col justify-between">
                            <div class="">
                                <div class="flex items-center space-x-2">
                                    <img src="@/assets/images/icons/logo_white.svg" alt="Logo" class="h-8 w-auto" />
                                </div>
                                <p class="text-white text-sm mt-4">
                                    We growing up your business to the international scale.
                                </p>
                            </div>
                            <div class="flex mt-4 sm:mt-0 gap-3">
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
                        <div class="col-span-12 sm:col-span-7 md:col-span-5 lg:col-span-3">
                            <h3 class="text-base lg:text-[17px] font-bold text-white mb-4">Services</h3>
                            <ul class="space-y-3 text-[13px] text-white lg:text-sm font-[300]">
                                <li><router-link to="/services/software-development" class="hover:text-white">Software
                                        Development</router-link></li>
                                <li><router-link to="/services/software-development" class="hover:text-white">UI/UX
                                        Design </router-link>
                                </li>
                                <li><router-link to="/services/software-development" class="hover:text-white">Mobile App
                                        Developement</router-link></li>
                                <li><router-link to="/services/software-development" class="hover:text-white">Web
                                        Application
                                        Development</router-link></li>
                                <li><a href="/services/software-development" class="hover:text-white">QA Testing</a>
                                </li>
                                <li><router-link to="/services/software-development" class="hover:text-white">Database
                                        Management</router-link></li>
                            </ul>
                        </div>

                        <div class="col-span-12 sm:col-span-5 md:col-span-3 lg:col-span-2">
                            <h3 class="text-base lg:text-[17px] font-bold text-white mb-4">Company</h3>
                            <ul class="space-y-3 text-[13px] text-white lg:text-sm font-normal">
                                <li><router-link to="/about" class="hover:text-white">About Us</router-link></li>
                                <li><router-link to="/blog" class="hover:text-white">Blog</router-link></li>
                                <li><router-link to="/career" class="hover:text-white">Careers</router-link></li>
                                <li><router-link to="/projects" class="hover:text-white">Our Projects</router-link></li>
                            </ul>
                        </div>

                        <div class="col-span-12 md:col-span-4 lg:col-span-3">
                            <h3 class="text-base lg:text-[17px] font-bold text-white mb-4">Contact us</h3>
                            <ul class="space-y-3 text-[13px] text-white lg:text-sm font-normal">
                                <li><a href="mailto:info@zavisoft.com" class="hover:text-white">info@zavisoft.com</a>
                                </li>
                                <li><a href="tel:01886660016" class="hover:text-white">01886660016</a></li>
                                <li><a href="#" class="hover:text-white">House #44, Road 02, ASA Center, Zigatola,
                                        Dhanmondi-1209</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-t border-neutral-600 mt-8 pt-6">
                        <ul class="space-y-2 text-sm text-neutral-400 flex gap-4">
                            <li><a href="#" class="hover:text-neutral-400">Terms of Use</a></li>
                            <li><a href="#" class="hover:text-neutral-400">Privacy Policy </a></li>
                            <li><a href="#" class="hover:text-neutral-400">About Cookies</a></li>
                        </ul>
                        <div class="mt-6">
                            <p class="text-sm text-neutral-400">Copyright &copy; 2025 Zavisoft. All rights reserved.</p>
                            <p class="text-sm text-neutral-400 mt-3">This product focuses on providing organizations
                                with
                                tools
                                to achieve financial
                                transparency. It might include features for budgeting, expense tracking, financial
                                reporting, and analytics to help businesses understand and communicate their financial
                                health clearly.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
</template>

<script setup>
import bgImg from '@/assets/images/footer_bg.svg';
import 'animate.css'

</script>
