<template>
    <div class="">

        <Swiper class="teamImages-slider px-4" :modules="[Autoplay, Pagination]" :space-between="0" :slides-per-view="1"
            :loop="true" :autoplay="{
                delay: 2500,
                disableOnInteraction: false
            }" :breakpoints="{
                375: { slidesPerView: 3.2 },
                640: { slidesPerView: 4.2 },
                768: { slidesPerView: 5.2 },
                1024: { slidesPerView: 6.2 },
                1440: { slidesPerView: 7.2 }
            }" :pagination="{
                clickable: true
            }" @swiper="onSwiper" @slideChange="onSlideChange">
            <SwiperSlide v-for="(teamImage, index) in teamImages" :key="teamImage.id ?? index">
                <article class="teamImages-card mr-[-60px] hover:z-10" :style="{
                    transform: `rotate(${teamImage.rotation}deg) translateY(${teamImage.offsetY || 0}px)`,
                    zIndex: teamImage.zIndex,
                    position: 'relative'
                }">
                    <div class="bg-white rounded-xl transition duration-300"
                        style="box-shadow: 0px 1.98px 1.98px 0px #0F1C330F;">
                        <div class="aspect-square p-2">
                            <img :src="teamImage.image" :alt="teamImage.title" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 flex items-center justify-between">
                            <div class="flex gap-3 mb-2">
                                <svg class="h-5 w-5 sm:h-6 sm:w-6 md:h-7 md:w-7" viewBox="0 0 30 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.3306 4.08948C21.4917 2.83267 24.3964 3.77689 26.2962 5.77572C28.2069 7.78616 29.0917 10.8571 28.1601 13.8311L28.1601 13.832C27.7122 15.2705 26.8068 16.5072 25.677 17.4273L15.0818 26.0546L4.42908 17.4984C3.28758 16.5529 2.37862 15.3494 1.92295 13.9198L1.92196 13.9169L1.83705 13.6389C1.01174 10.7588 1.87314 7.81073 3.71041 5.8513C5.59624 3.84036 8.5022 2.87629 11.6871 4.11268L11.688 4.11268C12.4813 4.41923 13.2023 5.11302 13.7444 5.77866C14.0099 6.10469 14.2223 6.41004 14.3674 6.634C14.4398 6.74577 14.4955 6.83718 14.5323 6.89908C14.5506 6.92984 14.5638 6.95388 14.5726 6.96925C14.577 6.97688 14.5805 6.98238 14.5824 6.98582L14.5844 6.98972L15.0206 7.77928L15.4526 6.98682C15.4529 6.98619 15.4535 6.98464 15.4545 6.9829C15.4564 6.97947 15.459 6.97373 15.4632 6.96627C15.472 6.9508 15.4859 6.92682 15.504 6.89582C15.5404 6.83368 15.5955 6.74191 15.6672 6.62965C15.8108 6.4048 16.0203 6.09776 16.2835 5.77016C16.8211 5.10102 17.5376 4.40239 18.3286 4.09046L18.3306 4.08948Z"
                                        stroke="#1E293B" stroke-width="0.989283" />
                                </svg>

                                <svg class="h-5 w-5 sm:h-6 sm:w-6 md:h-7 md:w-7" viewBox="0 0 30 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.653 19.8602C27.8913 17.4655 28.3349 14.601 27.6166 11.5735C26.5251 7.01847 22.6894 3.44553 18.0132 2.59948C9.42588 1.04379 2.02933 8.29569 3.6153 16.7128C4.50923 21.4631 8.37404 25.2862 13.164 26.243C15.7431 26.7626 18.2063 26.4485 20.3843 25.5795C20.9217 25.3554 21.488 25.2979 22.0267 25.4629L25.6841 26.5625C26.5347 26.8098 27.3536 26.0843 27.1809 25.251L26.4315 21.362C26.3165 20.862 26.428 20.3335 26.653 19.8602Z"
                                        stroke="#1E293B" stroke-width="1.24824" stroke-miterlimit="10" />
                                </svg>

                                <svg class="h-5 w-5 sm:h-6 sm:w-6 md:h-7 md:w-7" viewBox="0 0 30 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.64062 3.09033L28.9357 2.999L11.5639 26.3236L11.5142 11.462L1.64062 3.09033Z"
                                        stroke="#1E293B" stroke-width="1.24824" stroke-miterlimit="10"
                                        stroke-linejoin="round" />
                                    <path d="M11.5052 11.4608L28.9267 2.99776" stroke="#1E293B" stroke-width="1.24824"
                                        stroke-miterlimit="10" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <svg class="h-5 w-5 sm:h-6 sm:w-6 md:h-7 md:w-7" viewBox="0 0 30 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.2743 25.9742L15.3403 18.6346L6.45549 26.0338C5.81165 26.5646 4.84178 26.1325 4.83908 25.324L4.76999 4.67724C4.76718 3.83769 5.47511 3.15119 6.34668 3.14827L24.23 3.08843C25.1016 3.08551 25.8141 3.76726 25.8169 4.60682L25.886 25.2536C25.8887 26.0621 24.9217 26.5006 24.2743 25.9742Z"
                                    stroke="#1E293B" stroke-width="1.24824" stroke-miterlimit="10"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                </article>
            </SwiperSlide>
        </Swiper>



    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/pagination'
import { Autoplay, Pagination } from 'swiper/modules'

const MIN_ROTATION_MAGNITUDE = 12
const MAX_ROTATION_MAGNITUDE = 32
const MAX_Z_INDEX = 4
const MAX_VERTICAL_OFFSET = 12

const getRandomRotationMagnitude = () =>
    Math.floor(
        Math.random() * (MAX_ROTATION_MAGNITUDE - MIN_ROTATION_MAGNITUDE + 1)
    ) + MIN_ROTATION_MAGNITUDE

const getRandomSign = () => (Math.random() > 0.5 ? 1 : -1)

const getRandomZIndex = () => Math.floor(Math.random() * (MAX_Z_INDEX + 1))

const getRandomYOffset = () => {
    if (MAX_VERTICAL_OFFSET === 0) return 0
    const offset = Math.floor(Math.random() * (MAX_VERTICAL_OFFSET + 1))
    return (Math.random() > 0.5 ? 1 : -1) * offset
}

const baseTeamImages = [
    {
        id: 1,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_1.png', import.meta.url).href,
    },
    {
        id: 2,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_2.png', import.meta.url).href,

    },
    {
        id: 3,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_3.png', import.meta.url).href,

    },
    {
        id: 4,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_4.png', import.meta.url).href,

    },
    {
        id: 5,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_5.png', import.meta.url).href,

    },
    {
        id: 6,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_6.png', import.meta.url).href,

    },
    {
        id: 7,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_7.png', import.meta.url).href,

    },
    {
        id: 8,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_1.png', import.meta.url).href,

    },
    {
        id: 9,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_2.png', import.meta.url).href,

    },
    {
        id: 10,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_3.png', import.meta.url).href,

    },
    {
        id: 11,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_4.png', import.meta.url).href,

    },
    {
        id: 12,
        title: 'Performance team',
        image: new URL('@/assets/images/team/tm_image_5.png', import.meta.url).href,

    },
]

let previousRotationSign = null

const teamImages = baseTeamImages.map((card) => {
    let sign = previousRotationSign === null ? getRandomSign() : -previousRotationSign
    previousRotationSign = sign

    const rotation = sign * getRandomRotationMagnitude()

    return {
        ...card,
        rotation,
        zIndex: getRandomZIndex(),
        offsetY: getRandomYOffset(),
    }
})
</script>

<style scoped>
.teamImages-slider {
    padding: 60px 0 0 0;
}

.teamImages-slider :deep(.swiper-pagination) {
    position: relative;
    display: flex;
    justify-content: center;
    gap: 2px;
    margin-top: 90px;
}

.teamImages-slider :deep(.swiper-pagination-bullet) {
    width: 10px;
    height: 10px;
    background-color: #cbd5f5;
    opacity: 1;
    transition: all 0.3s ease;
}

.teamImages-slider :deep(.swiper-pagination-bullet-active) {
    width: 26px;
    border-radius: 9999px;
    background-color: #0f172a;
}

.teamImages-card {
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.teamImages-card:hover {
    z-index: 20 !important;
    transform: scale(1.08) translateY(-6px);
}

@media (max-width: 768px) {
    .teamImages-slider {
        padding: 40px 0 0 0;
    }

    .teamImages-slider :deep(.swiper-pagination) {
        margin-top: 70px;
    }
}

@media (max-width: 575px) {
    .teamImages-slider {
        padding: 30px 0 0 0;
    }

    .teamImages-slider :deep(.swiper-pagination) {
        margin-top: 50px;
    }
}
</style>
