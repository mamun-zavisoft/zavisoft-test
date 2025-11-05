<template>
    <section>
        <div class="hero relative w-full  bg-no-repeat bg-center bg-cover mt-[-120px] pb-8"
            :style="{ backgroundImage: `url(${bgImg})` }">
            <div class="container">
                <div
                    class="pt-30 lg:pt-36 xl:pt-40 flex flex-col items-center gap-3 border-b border-neutral-200 pb-6 md:pb-8 lg:pb-12">
                    <div class="flex flex-col items-center gap-2 md:gap-3 lg:gap-4 justify-center ">
                        <h1
                            class=" text-center text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl leading-8 md:leading-10 lg:leading-16  font-bold text-neutral-900">
                            A Complete Look at End-to-End Testing
                        </h1>
                        <p class="text-xs md:text-[13px] lg:text-sm text-neutral-400 font-medium flex gap-2 md:gap-4">
                            <span>By Mira Donovan</span> |
                            <span> Date 10.Oct 2025</span> |
                            <span> Read 1 Min ago</span>
                        </p>

                    </div>
                    <div class="mt-6 w-full">
                        <img src="@/assets/images/blog_2.svg" alt="Blog Image"
                            class="w-full max-h-[735px] object-cover">
                    </div>

                </div>

                <div class="mt-6 md:mt-8 lg:mt-10 relative single-post-container ">
                    <div class="post-content-wrapper">
                        <div class="grid grid-cols-1 md:grid-cols-[370px_1fr] md:gap-8  lg:gap-12">
                            <aside class="max-w-[370px]  sticky top-20 self-start hidden md:block">
                                <div class=" bg-neutral-50 rounded p-3 ">
                                    <h2 class="text-base lg:text-lg font-semibold tracking-wide text-neutral-900">
                                        Table of Contents
                                    </h2>
                                    <nav class="mt-3 mb-4">
                                        <ul class="space-y-4 text-neutral-400 font-medium text-sm lg:text-[15px]">
                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                What Is End-to-End Testing needed?
                                            </li>
                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                What Is the Goal?
                                            </li>

                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">

                                                When Should You Run E2E Tests?
                                            </li>
                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Test Strategy: Keep the Pyramid Shape
                                            </li>

                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Key Lessons Learned
                                            </li>
                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Stages of End-to-End Testing
                                            </li>
                                            <li
                                                class="cursor-pointer relative pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Final Impact
                                            </li>

                                        </ul>
                                        <div class="flex items-center gap-3 mt-4">
                                            <h6>Share : </h6>
                                            <div class="social-icon flex gap-1">
                                                <a href="#" class="inline-flex items-center justify-center p-1">
                                                    <img src="@/assets/images/icons/facebooks.svg" alt=""
                                                        class="w-4 h-4">
                                                </a>
                                                <a href="#" class="inline-flex items-center justify-center  p-1">
                                                    <img src="@/assets/images/icons/linkedine.svg" alt=""
                                                        class="w-4 h-4">

                                                </a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </aside>

                            <main class="w-full">
                                <p class=" text-sm lg:text-base text-neutral-400 ">
                                    If you work on a software team, you’ve likely come across end-to-end testing. QA
                                    groups routinely schedule an E2E cycle to verify that the product behaves correctly
                                    when used the way a real person would.
                                    Every application benefits from running E2E checks to validate that it behaves as
                                    designed. These tests increase confidence and help teams decide whether a build is
                                    suitable for a production rollout.
                                    This tutorial explains what E2E testing is, why it matters, and how to introduce it
                                    effectively in your project.
                                </p>


                                <hr class="mt-6 md:mt-8 border-neutral-200" />

                                <div class="section-title mt-6 md:mt-8">
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900 mb-4">
                                        What Is End-to-End Testing Needed?
                                    </h2>
                                    <p class="text-sm lg:text-base text-neutral-400">
                                        End-to-end testing evaluates the product from the user’s point of view,
                                        exercising the full workflow across modules, services, and integrations. The
                                        goal is to reproduce real usage and confirm that the system functions correctly
                                        from start through finish.
                                        Example: consider a demo banking site (e.g., Parabank) with separate areas for
                                        sign-up, login, accounts, transfers, payments, and reporting. Rather than
                                        validating each feature in isolation, an E2E flow would:
                                    </p>

                                    <div class="mt-4">
                                        <ul>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                register a new user,
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                sign in,
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                open an account,
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                move funds between accounts,
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                and confirm the transaction in a report.
                                            </li>
                                        </ul>
                                        <p class="text-sm lg:text-base text-neutral-400 mt-3">Because these steps mirror
                                            actual usage, they reveal issues that only surface when components work
                                            together.</p>
                                    </div>
                                </div>

                                <div class="section-title mt-6 md:mt-8">
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900 mb-4">
                                        ‍What Is the Goal?
                                    </h2>
                                    <p class=" text-sm lg:text-base text-neutral-400 ">
                                        Primary objectives of E2E testing include:
                                    </p>
                                    <div class="mt-4">
                                        <ul>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Validate real-world behavior across boundaries (UI, APIs, data stores,
                                                third-party services).
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Expose hidden defects before a release reaches customers.
                                            </li>

                                        </ul>
                                        <p class="text-sm lg:text-base text-neutral-400 mt-3">
                                            For instance, in a loan-application journey where users enter details and
                                            check eligibility, an E2E scenario confirms that the entire process can be
                                            completed without blockers. Besides functionality, these tests also provide
                                            insight into the overall user experience.</p>
                                    </div>
                                </div>
                                <div class="section-title mt-6 md:mt-8">
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900 mb-4">
                                        When Should You Run E2E Tests?
                                    </h2>
                                    <p class=" text-sm lg:text-base text-neutral-400 ">
                                        Teams typically execute E2E suites after functional and system testing, and
                                        before significant releases. Running them at this stage confirms the product
                                        operates correctly from a customer perspective and can uncover integration
                                        issues that weren’t visible earlier.
                                        It’s a best practice to wire E2E tests into your CI/CD pipeline so critical
                                        workflows are validated on each build and feedback arrives quickly.
                                    </p>

                                </div>
                                <div class="mt-4 md:mt-6 lg:mt-8">
                                    <img src="@/assets/images/detail_blog.svg" alt="Canva Code Feature Image"
                                        class="w-full max-h-[420px] object-cover">
                                </div>

                                <div class="section-title mt-6 md:mt-8">
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900 mb-4">
                                        Test Strategy: Keep the Pyramid Shape
                                    </h2>
                                    <p class=" text-sm lg:text-base text-neutral-400 ">
                                        E2E belongs at the top of a test pyramid
                                    </p>
                                    <div class="mt-4">
                                        <ul>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Unit tests form the largest portion,
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Integration/service tests come next,
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                E2E tests make up a small, targeted layer.
                                            </li>


                                        </ul>
                                        <p class="text-sm lg:text-base text-neutral-400 mt-3">
                                            Google’s testing guidance suggests a 70/20/10 split (unit/integration/E2E).
                                            Your exact mix may differ, but the overall shape should remain pyramidal to
                                            keep suites fast, reliable, and cost-effective.
                                        </p>
                                    </div>
                                </div>

                                <div class="section-title mt-6 md:mt-8">
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900 mb-4">
                                        Stages of End-to-End Testing
                                    </h2>
                                    <p class="text-sm lg:text-base text-neutral-400">
                                        E2E work generally unfolds in three phases:
                                    </p>

                                    <div class="mt-4">
                                        <ul>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Planning
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Testing (prerequisites → execution)
                                            </li>
                                            <li
                                                class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                Closure
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-sm lg:text-base text-neutral-900">1) Planning</p>
                                        <div class="mt-4">
                                            <p class="text-sm lg:text-base text-neutral-500">Key activities : </p>
                                            <ul class="mt-2">
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Clarify business goals and functional requirements.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Draft a test plan aligned with those objectives.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Design E2E scenarios that trace realistic user journeys.
                                                </li>

                                            </ul>
                                            <p class="text-sm lg:text-base text-neutral-500">Testers should map the main
                                                paths a user might take—start to finish—and turn them into executable
                                                cases (covering happy paths first, then key alternates).</p>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-sm lg:text-base text-neutral-500">Also prepare: </p>
                                            <ul class="mt-2">
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    A production-like environment (data, configuration, external
                                                    stubs/mocks as needed).
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Test data and entry/exit criteria.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Reviews with a BA or product owner to confirm coverage.
                                                </li>


                                            </ul>
                                            <p class="text-sm lg:text-base text-neutral-500">
                                                E-commerce example: browse → search → view product → add to cart →
                                                checkout → payment → order confirmation. Additional journeys might
                                                include resuming a session after logout, editing the cart, or cancelling
                                                an order.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-sm lg:text-base text-neutral-900">1) Testing</p>
                                        <div class="mt-4">
                                            <p class="text-sm lg:text-base text-neutral-500">Prerequisites Ensure that:
                                            </p>
                                            <ul class="mt-2">
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Feature development is complete.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Subsystems are integrated and pass system testing.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    A staging environment closely mirrors production.
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="mt-4">
                                            <p class="text-sm lg:text-base text-neutral-500">Execution: </p>
                                            <ul class="mt-2">
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Run the E2E cases.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Log defects when failures occur.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Retest fixes and re-run the suite to confirm nothing regresses.
                                                </li>
                                            </ul>
                                            <p class="text-sm lg:text-base text-neutral-500">
                                                E2E can be manual or automated, but the preferred approach is automation
                                                in CI/CD to save time and improve consistency.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="text-sm lg:text-base text-neutral-900">1) Closure</p>
                                        <div class="mt-4">
                                            <p class="text-sm lg:text-base text-neutral-500">Wrap-up includes:
                                            </p>
                                            <ul class="mt-2">
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Analyzing results and coverage.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Compiling a test report.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Verifying exit criteria.
                                                </li>
                                                <li
                                                    class="relative text-neutral-500 pl-4 before:content-['•'] before:absolute before:left-0 before:text-neutral-400 before:text-lg before:top-[-4px]">
                                                    Documenting known issues and lessons learned.
                                                </li>

                                            </ul>
                                            <p class="text-sm lg:text-base text-neutral-500 mt-3">Share a concise
                                                closure report with stakeholders; it’s especially useful for Go/No-Go
                                                decisions</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="section-title mt-6 md:mt-8">
                                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-neutral-900 mb-4">
                                        Final Impact
                                    </h2>
                                    <p class="text-sm lg:text-base text-neutral-400">
                                        End-to-end testing validates complete user journeys to ensure integrated
                                        components behave correctly together. By simulating authentic scenarios, E2E
                                        suites catch cross-module issues early and improve confidence ahead of release.
                                        Keep E2E targeted at critical flows, automate in CI/CD, and maintain the test
                                        pyramid’s balance so quality checks are fast, trustworthy, and
                                        actionable.End-to-end testing validates complete user journeys to ensure
                                        integrated components behave correctly together. By simulating authentic
                                        scenarios, E2E suites catch cross-module issues early and improve confidence
                                        ahead of release. Keep E2E targeted at critical flows, automate in CI/CD, and
                                        maintain the test pyramid’s balance so quality checks are fast, trustworthy, and
                                        actionable.
                                    </p>
                                </div>

                                <div class="writer mt-6 md:mt-8 border-t border-neutral-200 pt-6">
                                    <div class="flex gap-4  items-center ">
                                        <img src="@/assets/images/john.png" alt="Author Avatar"
                                            class="w-16 h-16 rounded-full object-cover mb-4">
                                        <p class="text-sm lg:text-base text-neutral-400">Mira Donovan</p>
                                    </div>

                                    <p class="text-sm text-neutral-400">Mira Donovan is a technology writer and digital
                                        transformation consultant passionate about the intersection of people, process,
                                        and product. She focuses on agile methodologies, platform engineering, and
                                        AI-driven innovation that enables teams to deliver value faster and smarter</p>
                                    <div class="social-icon flex mt-4 gap-3">
                                        <a href="#"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                            <img src="@/assets/images/icons/facebooks.svg" alt="">
                                        </a>
                                        <a href="#"
                                            class="inline-flex h-9 w-9 items-center justify-center rounded-full  bg-neutral-100 p-2">
                                            <img src="@/assets/images/icons/linkedine.svg" alt="">

                                        </a>

                                    </div>
                                </div>

                            </main>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="py-8 md:py-10 lg:py-12 bg-neutral-50">
        <div class="container">
            <div class="recent-blogs border-t border-neutral-200 pt-6 md:pt-8 lg:pt-10">
                <h2 class="text-2xl font-semibold text-neutral-900 mb-6">Recent Blogs</h2>
                <div class="grid grid-cols-1 md:grid-cols-2  gap-6">
                    <!-- Example Blog Card -->
                    <article v-for="(blog, index) in blogs" :key="index">
                        <router-link :to="blog.link">
                            <div class="overflow-hidden duration-300">
                                <div class="">
                                    <img :src="blog.image" alt="Blog Image" class="w-full max-h-[360px] object-cover">
                                </div>
                                <div class="mt-3">
                                    <p class="text-sm lg:text-base text-neutral-600 mb-2 line-clamp-1">By {{
                                        blog.writer }}
                                    </p>
                                    <h3
                                        class="text-base lg:text-lg xl:text-xl font-medium text-neutral-900 line-clamp-2">
                                        {{ blog.title }}
                                    </h3>
                                </div>
                            </div>
                        </router-link>
                    </article>

                </div>


            </div>
        </div>
    </section>
</template>
<script setup>
import bgImg from '@/assets/images/career_bg.svg';
const blogs = [
    {
        id: 1,
        writer: "Richard Aurora",
        image: new URL('@/assets/images/blog_1.svg', import.meta.url).href,
        title: "A Developer’s Journey Through Platform Onboarding",
        link: "/blog-one"
    },
    {
        id: 2,
        writer: "Mira Donovan",
        image: new URL('@/assets/images/blog_2.svg', import.meta.url).href,
        title: "A Complete Look at End-to-End Testing",
        link: "/blog-two"
    }

];
</script>