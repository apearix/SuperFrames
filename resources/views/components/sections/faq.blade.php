@php
    $faqs = include resource_path('data/faqs.php');
@endphp

<section class="pt-6 pb-16 bg-[var(--color-background)]">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Heading -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-[var(--color-primary)]">
                Frequently Asked Questions
            </h2>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
        </div>

        <!-- Accordion Container -->
        <div x-data="{ active: null }" class="space-y-4">
            @foreach ($faqs as $index => $faq)
                <div class="bg-white rounded-xl border border-[var(--color-border)] overflow-hidden shadow-xs">
                    <button type="button"
                        @click="active = (active === {{ $index }} ? null : {{ $index }})"
                        class="w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-heading text-lg font-semibold text-[var(--color-primary)] hover:text-[var(--color-primary-hover)] transition-colors focus:outline-none">
                        <span>{{ $faq['question'] }}</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 shrink-0 transition-transform duration-300"
                            :class="{ 'rotate-180': active === {{ $index }} }"></i>
                    </button>

                    <!-- Collapse wrapper with inner padding to prevent flicker -->
                    <div x-show="active === {{ $index }}" x-collapse x-cloak>
                        <div class="px-6 pb-5 pt-1.5 text-sm text-[var(--color-body)] leading-relaxed border-t border-[var(--color-border)]/50">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>