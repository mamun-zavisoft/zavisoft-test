<template>
    <div class="flex flex-col gap-8 lg:gap-12 lg:flex-row ">
        <div class="lg:w-1/2">
            <span
                class="inline-block text-sm font-medium border border-neutral-300 text-neutral-900 bg-neutral-100 px-3 py-1 rounded-full mb-2">
                FAQ’s
            </span>
            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold leading-snug text-neutral-900">
                Our Frequently Asked Questions
            </h2>

            <div class="mt-2 text-neutral-600 lg:w-[60%] mr-auto">
                <p class="mb-2 text-neutral-600 lg:text-base text-sm">
                    We put people first, understanding that a well-crafted product significantly impacts the lives of
                    those who use it.
                </p>
                <NavigateSecondary text="See our Case studies" to="/contact" class=" mt-4 md:mt-6 lg:mt-8" />
            </div>
        </div>
        <div class="lg:w-1/2">
            <fwb-accordion flushed>
                <fwb-accordion-panel>
                    <fwb-accordion-header
                        class="accordion-header text-base font-semibold lg:text-lg text-neutral-900 text-start">What
                        types of
                        software solutions do you
                        offer?</fwb-accordion-header>
                    <fwb-accordion-content class="accordion-content">
                        <p class="text-sm lg:text-base text-neutral-600"> We offer a wide range of custom software
                            solutions
                            including web and mobile applications,
                            enterprise systems, SaaS platforms, and cloud-based tools tailored to meet your business
                            needs.</p>
                    </fwb-accordion-content>
                </fwb-accordion-panel>
                <fwb-accordion-panel>
                    <fwb-accordion-header
                        class="accordion-header text-base font-semibold lg:text-lg text-neutral-900 text-start">What
                        types of
                        software solutions do you
                        offer?</fwb-accordion-header>
                    <fwb-accordion-content class="accordion-content">
                        <p class="text-sm lg:text-base text-neutral-600"> We offer a wide range of custom software
                            solutions
                            including web and mobile applications,
                            enterprise systems, SaaS platforms, and cloud-based tools tailored to meet your business
                            needs.</p>
                    </fwb-accordion-content>
                </fwb-accordion-panel>

            </fwb-accordion>


        </div>
    </div>
</template>

<script setup>
import {
    FwbAccordion,
    FwbAccordionContent,
    FwbAccordionHeader,
    FwbAccordionPanel,
} from 'flowbite-vue'
import NavigateSecondary from '@/components/ui/button/NavigateSecondary.vue';

</script>