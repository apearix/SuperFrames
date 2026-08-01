@php
    $products = include resource_path('data/products.php');
@endphp

<section class="py-16 bg-[var(--color-background)] border-t border-[var(--color-border)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-xl mx-auto mb-10">
            <span class="font-eyebrow text-xl text-[var(--color-primary)] block mb-1">
                @superframes ♡
            </span>
            <h2 class="font-heading text-3xl font-bold text-[var(--color-primary)]">
                Follow Us on Instagram
            </h2>
            <p class="text-xs text-[var(--color-body)] mt-2">
                Tag us in your photos to get featured on our feed!
            </p>
        </div>

        <!-- Instagram Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach(array_slice($products, 0, 6) as $item)
                <a 
                    href="https://instagram.com" 
                    target="_blank" 
                    rel="noopener"
                    class="group relative rounded-xl overflow-hidden aspect-square border border-[var(--color-border)] bg-white shadow-xs block"
                >
                    <img src="{{ asset($item['image']) }}" alt="Instagram Post" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
                        <i data-lucide="instagram" class="w-6 h-6"></i>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>