<!-- UxArticleScrollSpy.vue -->
<template>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
        <!-- TOC -->
        <aside class="md:col-span-4 lg:col-span-3">
            <div class="sticky top-4 rounded-2xl border border-gray-200 bg-white">
                <div class="border-b border-gray-200 p-4">
                    <h2 class="text-sm font-semibold tracking-wide text-gray-700">Table of Contents</h2>
                </div>
                <!-- Desktop: nested list (H2/H3) -->
                <nav class="hidden md:block p-2">
                    <ul class="space-y-1">
                        <li v-for="item in toc" :key="item.id" :class="item.level === 3 ? 'ml-6' : ''">
                            <button type="button" class="group w-full text-left rounded-lg px-3 py-2 transition"
                                :class="activeId === item.id ? 'bg-gray-900 text-white' : 'text-gray-700 hover:bg-gray-100'"
                                @click="scrollToId(item.id)" :aria-current="activeId === item.id ? 'page' : undefined">
                                <span class="inline-flex items-center gap-2">
                                    <span class="h-1.5 w-1.5 rounded-full"
                                        :class="activeId === item.id ? 'bg-white' : 'bg-gray-300 group-hover:bg-gray-400'"
                                        aria-hidden="true" />
                                    <span class="text-sm font-medium">{{ item.label }}</span>
                                </span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Article -->
        <main class="md:col-span-8 lg:col-span-9">
            <article ref="articleRef" class="rounded-2xl border border-gray-200 bg-white p-6 md:p-8 prose max-w-none">
                <!-- Example content: use h2/h3; IDs will be auto-added -->
                <p>
                    Ever dreamed of turning your design ideas into working code—without writing a single line yourself?
                    That’s where Canva Code comes in…
                </p>

                <h2>What Is a UX Design Strategy?</h2>
                <p>A UX design strategy aligns user needs with business goals through evidence-driven decisions.</p>

                <h3>Why it matters</h3>
                <p>Reduces rework, accelerates delivery, compounds value.</p>

                <h2>Core Components of UX Design Strategy</h2>
                <ul>
                    <li>User research & modeling</li>
                    <li>Experience principles</li>
                    <li>Prioritization & roadmap</li>
                    <li>Design system & tooling</li>
                    <li>Analytics & feedback loops</li>
                </ul>

                <h2>How to Create an Effective UX Design Strategy</h2>
                <h3>Step 1: Clarify outcomes & KPIs</h3>
                <p>Define north-star metric and guardrails.</p>
                <h3>Step 2: Map jobs-to-be-done</h3>
                <p>Find moments that matter, then prototype riskiest assumptions.</p>

                <h2>What is Canva Code?</h2>
                <p>New AI feature to turn prompts into functional experiences in Canva.</p>

                <h2>Frequently Asked Questions</h2>
                <h3>Is Canva Code available to everyone?</h3>
                <p>Rollout may be gradual.</p>

                <h2>Conclusions</h2>
                <p>Treat UX strategy as a living system. Outcomes &gt; outputs.</p>
            </article>
        </main>
    </div>
</template>

<script setup lang="ts">
import { onMounted, onBeforeUnmount, ref } from 'vue'

type TocItem = { id: string; label: string; level: 2 | 3 }

const articleRef = ref<HTMLElement | null>(null)
const toc = ref<TocItem[]>([])
const activeId = ref<string>('')

// If you have a fixed header, set its height here to offset scrolling
const SCROLL_OFFSET = 12 // px (tweak as needed or compute from header height)

let observer: IntersectionObserver | null = null

onMounted(() => {
    // 1) Build TOC from H2/H3 in the article
    const article = articleRef.value!
    const headings = Array.from(article.querySelectorAll('h2, h3')) as HTMLHeadingElement[]

    toc.value = headings.map(h => {
        if (!h.id) h.id = slugify(h.textContent || 'section')
        // Add a little top padding + negative margin so anchor lands nicely
        h.classList.add('scroll-mt-24') // Tailwind: margin-top for scroll anchoring
        return { id: h.id, label: h.textContent || '', level: (h.tagName === 'H2' ? 2 : 3) }
    })

    if (toc.value.length) activeId.value = toc.value[0].id

    // 2) Scroll-spy via IntersectionObserver (tracks which heading is in view)
    const options: IntersectionObserverInit = {
        root: null,
        rootMargin: '-20% 0px -60% 0px', // focus on top third of viewport
        threshold: [0, 1],
    }

    observer = new IntersectionObserver((entries) => {
        // Pick the entry nearest the top that is intersecting
        const visible = entries
            .filter(e => e.isIntersecting)
            .sort((a, b) => (a.target as HTMLElement).offsetTop - (b.target as HTMLElement).offsetTop)

        if (visible.length) {
            const id = (visible[0].target as HTMLElement).id
            if (id) activeId.value = id
        }
    }, options)

    headings.forEach(h => observer!.observe(h))

    // 3) Hash deep-link support on initial load
    if (location.hash) {
        const idFromHash = decodeURIComponent(location.hash.replace('#', ''))
        setTimeout(() => scrollToId(idFromHash, false), 0)
    }

    // 4) Update hash when activeId changes (optional but useful)
    const onScroll = () => {
        if (!activeId.value) return
        if (location.hash !== `#${activeId.value}`) history.replaceState(null, '', `#${activeId.value}`)
    }
    window.addEventListener('scroll', onScroll, { passive: true })
    cleanup.push(() => window.removeEventListener('scroll', onScroll))
})

onBeforeUnmount(() => {
    observer?.disconnect()
    cleanup.forEach(fn => fn())
})

const cleanup: Array<() => void> = []

function scrollToId(id: string, smooth = true) {
    const el = document.getElementById(id)
    if (!el) return
    const y = el.getBoundingClientRect().top + window.scrollY - SCROLL_OFFSET
    window.scrollTo({ top: y, behavior: smooth ? 'smooth' : 'auto' })
    activeId.value = id
}

function slugify(text: string) {
    return text
        .toLowerCase()
        .trim()
        .replace(/[^\w\s-]/g, '')
        .replace(/\s+/g, '-')
        .replace(/-+/g, '-')
}
</script>
