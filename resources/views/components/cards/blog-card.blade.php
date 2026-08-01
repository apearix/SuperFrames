@props(['blog'])

<div class="group relative rounded-2xl overflow-hidden bg-black aspect-4/5 shadow-md flex flex-col justify-end p-6 border border-[var(--color-border)]">
    <img 
        src="{{ asset($blog['image']) }}" 
        alt="{{ $blog['title'] }}" 
        class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>

    <div class="relative z-10 text-white">
        <span class="text-[10px] uppercase tracking-wider text-[var(--color-secondary)] block mb-1 font-semibold">
            {{ $blog['date'] ?? 'Article' }}
        </span>
        <h3 class="font-heading text-xl font-bold mb-2 leading-snug">
            {{ $blog['title'] }}
        </h3>
        <p class="text-xs text-gray-300 leading-relaxed mb-4 line-clamp-2">
            {{ $blog['excerpt'] }}
        </p>
        <a href="{{ $blog['link'] ?? '/blog/' . ($blog['slug'] ?? '') }}" class="inline-flex items-center gap-1.5 text-xs font-semibold text-white hover:text-[var(--color-secondary)] transition-colors">
            <span>Read More</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</div>