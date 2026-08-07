@props(['product'])

<div class="group bg-white rounded-2xl border border-[var(--color-border)] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    
    <!-- Image Area -->
    <div class="relative h-64 overflow-hidden bg-[var(--color-section)]">
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

    <!-- Content Area -->
    <div class="p-5 flex-1 flex flex-col justify-between">
        <div>
            <h3 class="font-serif text-xl font-bold text-[var(--color-primary)] mb-1">
                {{ $product['title'] }}
            </h3>
            
            <p class="text-xs text-gray-500 font-medium mb-2">
                Starting From <span class="font-bold text-[var(--color-primary)]">₹{{ $product['price'] }}</span>
            </p>

            <p class="text-xs text-[var(--color-body)] line-clamp-2 mb-4 leading-relaxed">
                {{ $product['tagline'] ?? '' }}
            </p>

            <!-- Tags -->
            <div class="flex flex-wrap gap-1.5 mb-6">
                @if(!empty($product['style']))
                    <span class="text-[10px] font-medium bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">
                        {{ $product['style'] }}
                    </span>
                @endif
                @if(!empty($product['occasion']))
                    <span class="text-[10px] font-medium bg-gray-100 text-gray-700 px-2.5 py-1 rounded-md">
                        {{ $product['occasion'] }}
                    </span>
                @endif
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="space-y-2 pt-2 border-t border-gray-100">
            <a 
                href="{{ $product['link'] ?? '/product/' . $product['slug'] }}" 
                class="w-full inline-flex items-center justify-center px-4 py-2 bg-[#0b2148] hover:bg-[#112a58] text-white text-xs font-semibold rounded-lg transition-colors"
            >
                View Details
            </a>
            <a 
                href="{{ $product['link'] ?? '/product/' . $product['slug'] }}" 
                class="w-full inline-flex items-center justify-center px-4 py-2 bg-white hover:bg-gray-50 text-[#0b2148] border border-[#0b2148] text-xs font-semibold rounded-lg transition-colors"
            >
                Customize Now
            </a>
        </div>
    </div>
</div>