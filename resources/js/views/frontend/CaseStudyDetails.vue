<template>
    <section>
        <div class="container">
            <h1 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-neutral-900">
                Packly - Website Design for ecommerce Platform
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 lg:gap-8 mt-9">

                <div class="md:col-span-7 lg:col-span-8">
                    <img src="@/assets/images/case_details.svg" alt="" class="block w-full h-auto object-cover"
                        loading="lazy">
                </div>
                <div class="md:col-span-5 lg:col-span-4 md:sticky md:top-20 self-start h-full">
                    <div class="flex flex-col h-full">
                        <div class="bg-neutral-100 p-4 rounded-lg flex flex-col gap-4 justify-between flex-1">
                            <div>
                                <span class="inline-block text-sm font-medium mb-2">Company Logo:</span>
                                <div class="h-8 flex items-start my-3">
                                    <img src="@/assets/images/icons/logo.svg" alt="" class="h-full w-auto"
                                        loading="lazy">
                                </div>
                            </div>

                            <div>
                                <p class="text-sm md:text-base text-neutral-500">Our Contributes:</p>
                                <h5 class="mt-1 text-base md:text-lg font-semibold">
                                    UI/UX design, Development, QA testing
                                </h5>
                            </div>

                            <div>
                                <p class="text-sm md:text-base text-neutral-500">Platforms:</p>
                                <h5 class="mt-1 text-base md:text-lg font-semibold">
                                    Branding, Web & Responsive
                                </h5>
                            </div>
                        </div>

                        <!-- Fit-content only, sits at bottom of sticky column -->
                        <div class="share-link mt-4 shrink-0 flex gap-3">
                            <h6> Share link</h6>
                            <div class="flex items-center gap-2">
                                <a href="#"
                                    class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center ">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 8 19">
                                        <path fill-rule="evenodd"
                                            d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center">
                                    <img src="@/assets/images/icons/linkEdin.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12">
        <div class="container">
            <div class="max-w-[800px] mr-auto">
                <div class="border-b border-neutral-300 pb-12">
                    <h1 class="text-xl md:text-2xl lg:text-3xl">About the Project</h1>
                    <p class="text-sm md:text-base text-neutral-400 mt-4 md:mt-6">Packly’s slogan captures the essence
                        of
                        our mission:

                        To provide a seamless, all-in-one solution for your everyday needs. From shopping to services,
                        we
                        bring everything together in one convenient place, ensuring you get exactly what you need, when
                        you
                        need it.
                        Whether it’s essentials, indulgences, or surprises, Packly delivers it all—efficiently,
                        effortlessly, and reliably. We take the hassle out of your day, packing convenience,choice, and
                        quality into one platform designed just for you.</p>
                </div>
                <div class="border-b border-neutral-300 pb-12">
                    <h1 class="text-xl md:text-2xl lg:text-3xl">Business Result</h1>
                    <p class="text-sm md:text-base text-neutral-400 mt-4 md:mt-6">65% Increase in Conversions: With the
                        redesigned UI/UX and optimized checkout flow, the number of completed custom packaging orders
                        rose significantly.

                        2x Faster Time-to-Market: Streamlined development and QA testing enabled rapid feature rollout
                        and reduced time between releases.

                        Improved Customer Satisfaction: Enhanced user interface and robust cross-device compatibility
                        led to better customer retention and positive user feedback.</p>
                </div>
                <div class="project-images pt-12">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="max-h-[360px]">
                            <img class="w-full h-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        </div>
                        <div class="max-h-[360px]">
                            <img class="w-full h-full rounded-lg"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">

                        </div>
                    </div>
                </div>

                <div class=" pt-8">
                    <h1 class="text-xl md:text-2xl lg:text-3xl">Challenge</h1>
                    <p class="text-sm md:text-base text-neutral-400 mt-4 md:mt-6">Complex Product Customization Flow:
                        Users needed to configure packaging size, material, print options, and 3D previews — all without
                        feeling overwhelmed.

                        Outdated UI & Poor Mobile UX: The existing design lacked visual appeal and wasn’t optimized for
                        responsive behavior, leading to drop-offs on mobile.

                        Performance Bottlenecks: The real-time 3D preview tool and quote generator were slow, especially
                        under high traffic.

                        Fragmented QA Process: Frequent bugs in production due to lack of standardized quality checks
                        before deployment.</p>
                </div>
                <div class="mt-8 p-4 bg-primary-50 rounded-lg ">
                    <h1 class="text-xl md:text-2xl lg:text-3xl mb-6">Solution</h1>
                    <div class="mb-6">
                        <p class="text-base text-neutral-900">UI/UX Design</p>

                        <ul class="mt-3 pl-4  text-neutral-400 space-y-2 text-sm">
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Redesigned UI/UX to prioritize simplicity and efficiency
                            </li>
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Streamlined checkout flow for faster transactions
                            </li>
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Implemented responsive design for optimal mobile experience
                            </li>
                        </ul>
                    </div>

                    <div class="mb-6">
                        <p class="text-base text-neutral-900">Development</p>

                        <ul class="mt-3 pl-4  text-neutral-400 space-y-2 text-sm">
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Redesigned UI/UX to prioritize simplicity and efficiency
                            </li>
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Streamlined checkout flow for faster transactions
                            </li>
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Implemented responsive design for optimal mobile experience
                            </li>
                        </ul>
                    </div>

                    <div class="">
                        <p class="text-base text-neutral-900">QA & Testing</p>

                        <ul class="mt-3 pl-4  text-neutral-400 space-y-2 text-sm">
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Redesigned UI/UX to prioritize simplicity and efficiency
                            </li>
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Streamlined checkout flow for faster transactions
                            </li>
                            <li class="relative list-none pl-4
             before:content-[''] before:absolute before:-left-2 before:top-2
             before:h-1.5 before:w-1.5 before:rounded-full before:bg-neutral-400">
                                Implemented responsive design for optimal mobile experience
                            </li>
                        </ul>
                    </div>


                </div>
                <div class=" pt-8">
                    <h1 class="text-xl md:text-2xl lg:text-3xl">Final Impact</h1>
                    <p class="text-sm md:text-base text-neutral-400 mt-4 md:mt-6">Packly’s reimagined eCommerce
                        experience empowered users to create customized packaging effortlessly — leading to higher
                        engagement, smoother conversions, and stronger brand trust.</p>
                </div>
            </div>
        </div>
    </section>
</template>