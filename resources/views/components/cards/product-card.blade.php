@props(['product'])

<div class="group bg-white rounded-2xl border border-[var(--color-border)] overflow-hidden shadow-2xs hover:shadow-md transition-all duration-300 flex flex-col justify-between">
    <div class="relative aspect-square overflow-hidden bg-[var(--color-section)]">
        <img 
            src="{{ asset($product['image']) }}" 
            alt="{{ $product['title'] }}" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        >
        @if(!empty($product['is_bestseller']))
            <span class="absolute top-3 left-3 bg-[var(--color-secondary)] text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider shadow-xs">
                Best Seller
            </span>
        @endif
    </div>

    <div class="p-5 flex-1 flex flex-col justify-between">
        <div>
            <span class="text-[10px] text-[var(--color-secondary)] font-semibold uppercase tracking-wider block mb-1">
                {{ $product['style'] ?? $product['occasion'] }}
            </span>
            <h3 class="font-heading text-lg font-bold text-[var(--color-primary)] mb-1">
                <a href="{{ $product['link'] ?? '/product/' . $product['slug'] }}" class="hover:text-[var(--color-secondary)] transition-colors">
                    {{ $product['title'] }}
                </a>
            </h3>
            <p class="text-xs text-[var(--color-body)] line-clamp-2 mb-4 leading-relaxed">
                {{ $product['tagline'] ?? '' }}
            </p>
        </div>

        <div class="flex items-center justify-between pt-3 border-t border-[var(--color-border)]/60">
            <span class="font-heading font-bold text-lg text-[var(--color-primary)]">
                ₹{{ $product['price'] }}
            </span>
            <a 
                href="{{ $product['link'] ?? '/product/' . $product['slug'] }}" 
                class="inline-flex items-center gap-1 text-xs font-semibold text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition-colors"
            >
                <span>Customize</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
            </a>
        </div>
    </div>
</div>