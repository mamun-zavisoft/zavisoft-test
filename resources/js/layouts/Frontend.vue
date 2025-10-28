<template>
    <div class="min-h-screen flex flex-col ">
        <!-- Header -->
        <div class="bg-transparent w-full">
            <div class="container fixed left-0 right-0 z-20  transition-all duration-300"
                :class="isScrolled ? 'top-0' : 'top-2'">
                <Navbar />

            </div>
        </div>

        <!-- Main Content -->
        <main class="content flex-grow overflow-y-auto pt-[90px] md:pt-[100px] lg:pt-[120px]">
            <slot />
        </main>

        <!-- Footer -->
        <div class="footer">
            <Footer />
        </div>
    </div>
</template>


<script setup>
import Navbar from '@/components/header/Navbar.vue';
import Footer from '@/components/footer/Footer.vue';
import { ref, onMounted, onUnmounted } from 'vue';

const isScrolled = ref(false);

function handleScroll() {
    isScrolled.value = window.scrollY > 10;
}

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

</script>