<template>
    <!-- Desktop / Tablet: Grid -->
    <div v-if="members?.length" class="hidden sm:grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-12 gap-y-6">
        <div v-for="(m, i) in members" :key="i">
            <MemberCard :member="m" />
        </div>
    </div>

    <!-- Mobile: Swiper -->
    <div class="sm:hidden" v-if="members?.length">
        <Swiper class="px-4 pb-8" :modules="swiperModules" :slides-per-view="1.2" :space-between="16"
            :centered-slides="false" :loop="false" :autoplay="{ delay: 2500, disableOnInteraction: false }"
            :pagination="{ clickable: true }">
            <SwiperSlide v-for="(m, i) in members" :key="i">
                <MemberCard :member="m" />
            </SwiperSlide>

            <!-- Swiper renders its own pagination; style via CSS below -->
        </Swiper>
    </div>
</template>

<script setup>
import { FwbCard } from 'flowbite-vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Pagination, Autoplay } from 'swiper/modules'

// Props: pass an array of members
const props = defineProps({
    members: {
        type: Array,
        required: true,
        // [{ name, title, photo, linkedin? }]
    },
})

const swiperModules = [Pagination, Autoplay]

/**
 * Local sub-component for a single card
 * Keeps template tidy and reused for grid + slider
 */
const MemberCard = {
    name: 'MemberCard',
    components: { FwbCard },
    props: {
        member: {
            type: Object,
            required: true, // { name, title, photo, linkedin? }
        },
    },
    template: `
    <fwb-card
      variant="image"
      :img-src="member.photo"
      :img-alt="\`Photo of \${member.name}\`"
      class="border-0 shadow-sm rounded-xl overflow-hidden"
    >
      <div class="py-3 px-1.5">
        <div class="flex items-start justify-between">
          <div class="pr-3">
            <h3 class="text-base md:text-lg font-bold text-neutral-900 leading-snug">
              {{ member.name }}
            </h3>
            <p class="text-xs md:text-sm text-neutral-500 mt-1">
              {{ member.title }}
            </p>
          </div>
          <a
            v-if="member.linkedin"
            :href="member.linkedin"
            target="_blank"
            rel="noopener"
            class="shrink-0 inline-flex h-8 w-8 items-center justify-center rounded-full bg-neutral-100 text-neutral-600 hover:bg-neutral-200 hover:text-neutral-800 transition"
            aria-label="LinkedIn profile"
          >
            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="currentColor" aria-hidden="true">
              <path d="M19 3A2.94 2.94 0 0 1 22 6v12a2.94 2.94 0 0 1-3 3H5a2.94 2.94 0 0 1-3-3V6a2.94 2.94 0 0 1 3-3h14ZM8.34 18v-7.2H5.7V18h2.64Zm-.03-8.4c.9 0 1.47-.6 1.47-1.35-.02-.78-.57-1.35-1.44-1.35S6.9 7.47 6.9 8.25c0 .75.57 1.35 1.41 1.35ZM18.3 18v-4c0-2.13-1.14-3.12-2.67-3.12-1.24 0-1.8.69-2.1 1.17V10.8H10.9V18h2.64v-4.02c0-1.05.6-1.71 1.5-1.71.9 0 1.41.6 1.41 1.71V18H18.3Z"/>
            </svg>
          </a>
        </div>
      </div>
    </fwb-card>
  `,
}
</script>

<style>
/* Swiper core styles (global, not scoped) */
@import 'swiper/css';
@import 'swiper/css/pagination';
</style>

<style scoped>
/* Make images cover nicely */
:deep(img) {
    object-fit: cover;
}

/* Subtle hover lift on larger screens */
.fwb-card:hover {
    transform: translateY(-2px);
}

/* Pagination bullets look like your mock */
:deep(.swiper-pagination-bullet) {
    width: 8px;
    height: 8px;
    opacity: 0.35;
    background: #111827;
    /* neutral-900 */
    margin: 0 6px !important;
    transition: width 200ms ease, opacity 200ms ease;
}

:deep(.swiper-pagination-bullet-active) {
    width: 36px;
    border-radius: 9999px;
    opacity: 0.8;
}
</style>
