@props(['style'])

<div class="group bg-white rounded-3xl border border-[var(--color-border)] overflow-hidden shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <div class="relative h-60 overflow-hidden bg-[var(--color-section)]">
        <img 
            src="{{ asset($style['banner_image'] ?? $style['image'] ?? 'images/products/forever-together.jpg') }}" 
            alt="{{ $style['title'] }}" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <span class="absolute bottom-4 left-6 font-eyebrow text-sm text-[var(--color-secondary)] drop-shadow-2xs">
            {{ $style['eyebrow'] ?? 'Custom Craft' }}
        </span>
    </div>

    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-3">
                {{ $style['title'] }}
            </h3>
            <p class="text-xs text-[var(--color-body)] leading-relaxed mb-6">
                {{ $style['subtitle'] ?? $style['description'] ?? '' }}
            </p>
        </div>

        <a 
            href="/frame-style/{{ $style['slug'] }}" 
            class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl border border-[var(--color-primary)] text-[var(--color-primary)] font-semibold text-xs hover:bg-[var(--color-primary)] hover:text-white transition-all duration-300 shadow-2xs"
        >
            <span>Explore Collection</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</div>