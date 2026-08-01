@props(['occasion'])

<div class="group bg-white rounded-3xl border border-[var(--color-border)] overflow-hidden shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <div class="relative h-56 overflow-hidden bg-[var(--color-section)]">
        <img 
            src="{{ asset($occasion['banner_image'] ?? 'https://images.unsplash.com/photo-1518895949257-7621c3c786d7?q=80&w=800') }}" 
            alt="{{ $occasion['title'] }}" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
        <span class="absolute bottom-3 left-5 font-eyebrow text-xs text-[var(--color-secondary)]">
            {{ $occasion['eyebrow'] ?? 'Special Memories' }}
        </span>
    </div>

    <div class="p-6 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="font-heading text-xl font-bold text-[var(--color-primary)] mb-2">
                {{ $occasion['title'] }}
            </h3>
            <p class="text-xs text-[var(--color-body)] leading-relaxed mb-6 line-clamp-2">
                {{ $occasion['subtitle'] ?? $occasion['description'] ?? '' }}
            </p>
        </div>

        <a 
            href="/occasion/{{ $occasion['slug'] }}" 
            class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-xs hover:bg-[var(--color-primary)] hover:text-white transition-colors"
        >
            <span>View Collection</span>
            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
        </a>
    </div>
</div>