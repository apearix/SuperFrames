@php
    $products = include resource_path('data/products.php');
    $bestsellers = array_filter($products, fn($item) => $item['is_bestseller'] ?? false);
@endphp

<section class="py-16 md:py-24 bg-[var(--color-background)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <!-- Section Heading -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-xl text-[var(--color-primary)] block mb-1">Customer Favorites ♡</span>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Best Sellers
            </h2>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-base">
                Discover our most loved handcrafted photo frames, carefully designed to turn life's beautiful moments
                into timeless keepsakes.
            </p>
        </div>

        <!-- Bestsellers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($bestsellers as $product)
                <x-cards.product-card :product="$product" />
            @endforeach
        </div>

        <!-- Bottom Call to Action -->
        <div class="text-center mt-12">
            <p class="text-sm font-medium text-[var(--color-heading)] mb-4">Looking for More Designs?</p>
            <a href="/products"
                class="inline-flex items-center gap-2 px-8 py-3 rounded-md border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-primary)] hover:text-white transition-all duration-300">
                <span>View All Products</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</section>
