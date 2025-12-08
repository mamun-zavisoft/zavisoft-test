<template>
    <header
        :class="['w-full bg-white px-4 py-2 sm:py-2.5 md:py-3 relative', mobileMenuOpen ? 'rounded-tr-lg rounded-tl-lg' : 'rounded-full']"
        class="shadow-[4px_0_20px_-4px_#0F1C330F]">
        <div class="flex justify-between items-center">
            <!-- Logo & Navigation -->
            <div class="flex items-center gap-5 justify-between w-full lg:w-auto">
                <router-link to="/" class="flex items-center gap-2" title="Home">
                    <img src="@/assets/images/icons/logo.svg" alt="Logo"
                        class="h-8 w-auto max-w-[100px] sm:max-w-[120px] lg:max-w-[140px]" />
                </router-link>
                <button 
                    @click="toggleMobileMenu"
                    class="lg:hidden p-2 rounded-md focus:outline-none focus:ring focus:ring-primary-200"
                    :aria-label="mobileMenuOpen ? 'Close menu' : 'Open menu'">
                    <svg v-if="!mobileMenuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg v-else class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="menu-link">
                <nav class="hidden lg:flex lg:gap-4 xl:gap-6 items-center">
                    <fwb-dropdown class="megaMenu" close-inside @show="isDropdownOpen = true"
                        @hide="isDropdownOpen = false">
                        <template #trigger>
                            <div class="px-2 py-1 flex items-center gap-2 cursor-pointer text-neutral-900 font-medium">
                                <span>Service</span>
                                <svg class="h-4 w-4 transition-transform duration-300"
                                    :class="{ 'rotate-180': isDropdownOpen }" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="#0F172A">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </template>

                        <NavRoute 
                            :service-data="finalServices" 
                            :loading="loading" 
                            :error="error"
                        />
                    </fwb-dropdown>

                    <router-link to="/projects"
                        class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Our Projects
                    </router-link>
                    <router-link to="/about" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        About Us
                    </router-link>
                    <router-link to="/team" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Team
                    </router-link>
                    <router-link to="/career" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Career
                    </router-link>
                    <router-link to="/blog" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Blog
                    </router-link>
                </nav>
            </div>

            <!-- Desktop Actions -->
            <div class="hidden lg:flex items-center gap-6">
                <a href="https://wa.me/+8801866660016" target="_blank" rel="noopener noreferrer"
                    class="flex items-center gap-1.5">
                    <img src="@/assets/images/icons/whatsapp_24.svg" alt="Chat on WhatsApp" class="h-6 w-6" />
                    <span class="text-sm font-semibold text-neutral-800">Let’s Talk!</span>
                </a>
                <NavigatePrimaryButton text="Schedule a call" to="/contact" />
            </div>
        </div>

        <!-- Mobile Menu -->
        <transition name="slide-down">
            <div v-show="mobileMenuOpen"
                class="slide-down absolute top-full w-auto bg-white lg:hidden z-50 shadow-lg rounded-br-lg rounded-bl-lg max-h-[90vh] overflow-y-auto">
                <NavRoute 
                    :service-data="finalServices" 
                    :loading="loading" 
                    :error="error"
                />

                <nav class="flex flex-col gap-2 px-4 mt-4" role="menu">
                    <router-link to="/projects"
                        class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Our Projects
                    </router-link>
                    <router-link to="/about" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        About Us
                    </router-link>
                    <router-link to="/team" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Team
                    </router-link>
                    <router-link to="/career" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Career
                    </router-link>
                    <router-link to="/blog" class="px-2 py-1 text-sm font-medium text-neutral-900 transition-colors">
                        Blog
                    </router-link>
                </nav>

                <div
                    class="px-4 flex flex-col sm:flex-row gap-4 border-t mt-4 pt-3 border-neutral-200 sm:justify-between justify-center items-center mb-4">
                    <a href="https://wa.me/+8801866660016" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-1.5">
                        <img src="@/assets/images/icons/whatsapp_24.svg" alt="Chat on WhatsApp" class="h-6 w-6" />
                        <span class="text-sm font-semibold text-neutral-800">Let’s Talk!</span>
                    </a>
                    <NavigatePrimaryButton text="Schedule a call" to="/contact" />
                </div>
            </div>
        </transition>
    </header>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'
import NavigatePrimaryButton from '@/components/ui/button/NavigatePrimary.vue'
import NavRoute from '@/components/header/NavRoute.vue'
import { FwbDropdown } from 'flowbite-vue'
import { useFetch } from "@/composables/useFetch"

const mobileMenuOpen = ref(false)
const isDropdownOpen = ref(false)

function toggleMobileMenu() {
    mobileMenuOpen.value = !mobileMenuOpen.value
}

const router = useRouter()
router.afterEach(() => {
    mobileMenuOpen.value = false
    isDropdownOpen.value = false
})

// Fetch data once here (eager preload)
const { data: serviceData, loading, error } = useFetch("/api/service-categories")

// Predefined icons (moved up for reuse)
const predefinedIcons = [
    new URL('@/assets/images/icons/database.svg', import.meta.url).href,
    new URL('@/assets/images/icons/mobile.svg', import.meta.url).href,
    new URL('@/assets/images/icons/testing.svg', import.meta.url).href,
    new URL('@/assets/images/icons/software.svg', import.meta.url).href,
    new URL('@/assets/images/icons/ui_ux.svg', import.meta.url).href,
    new URL('@/assets/images/icons/web.svg', import.meta.url).href
]

// Computed finalServices here to avoid recompute in child
const finalServices = computed(() => {
    if (!serviceData?.value) return []

    return serviceData.value.slice(0, 6).map((service, index) => ({
        ...service,
        icon: predefinedIcons[index] || predefinedIcons[predefinedIcons.length - 1]
    }))
})
</script>