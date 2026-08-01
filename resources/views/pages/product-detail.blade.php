@extends('layouts.app')

@php
    $products = include resource_path('data/products.php');
    $memories = include resource_path('data/memories.php');
    $faqs = include resource_path('data/faqs.php');

    $slug = $slug ?? request()->route('slug') ?? 'forever-together';
    $product = collect($products)->firstWhere('slug', $slug) ?? $products[0];

    $gallery = $product['gallery'] ?? [$product['image']];
    $relatedProducts = array_values(array_filter($products, fn($p) => $p['id'] !== $product['id']));
@endphp

@section('title', $product['title'] . ' | SuperFrames')
@section('meta_description', $product['tagline'])

@section('content')
<div class="bg-[var(--color-background)] py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
            <span class="mx-2">></span>
            <a href="/best-sellers" class="hover:text-[var(--color-primary)]">Product Listing</a>
            <span class="mx-2">></span>
            <span class="text-[var(--color-primary)] font-medium">{{ $product['title'] }}</span>
        </nav>

        <!-- Product Buy Box Section -->
        <div x-data="{ activeImage: '{{ asset($gallery[0]) }}' }" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start mb-16">
            
            <!-- Left: Gallery & Carousel -->
            <div class="lg:col-span-7">
                <!-- Main Image Preview -->
                <div class="relative rounded-2xl overflow-hidden bg-white border border-[var(--color-border)] shadow-sm mb-4 aspect-4/3">
                    <img 
                        :src="activeImage" 
                        alt="{{ $product['title'] }}" 
                        class="w-full h-full object-cover transition-all duration-300"
                    >
                    <!-- Fullscreen Lightbox Button -->
                    <a 
                        :href="activeImage" 
                        class="glightbox absolute top-4 right-4 w-10 h-10 rounded-full bg-white/80 backdrop-blur-md text-[var(--color-primary)] flex items-center justify-center hover:bg-white shadow-xs transition-colors"
                        aria-label="Expand image"
                    >
                        <i data-lucide="maximize-2" class="w-5 h-5"></i>
                    </a>
                </div>

                <!-- Gallery Thumbnails Carousel -->
                <div class="flex items-center gap-3 overflow-x-auto pb-2">
                    @foreach($gallery as $img)
                        <button 
                            type="button" 
                            @click="activeImage = '{{ asset($img) }}'"
                            class="w-20 h-20 rounded-xl overflow-hidden border-2 shrink-0 transition-all"
                            :class="activeImage === '{{ asset($img) }}' ? 'border-[var(--color-primary)] ring-2 ring-[var(--color-primary)]/20' : 'border-[var(--color-border)] opacity-70 hover:opacity-100'"
                        >
                            <img src="{{ asset($img) }}" alt="Thumbnail" class="w-full h-full object-cover">
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Right: Product Info & Actions -->
            <div class="lg:col-span-5 bg-white p-8 rounded-2xl border border-[var(--color-border)] shadow-xs">
                <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] mb-2">
                    {{ $product['title'] }}
                </h1>

                <p class="text-2xl font-bold font-heading text-[var(--color-primary)] mb-4">
                    Starting From <span class="text-[var(--color-primary)]">₹{{ $product['price'] }}</span>
                </p>

                <p class="text-sm text-[var(--color-body)] leading-relaxed mb-6">
                    {{ $product['tagline'] }}
                </p>

                <!-- Tags -->
                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[var(--color-section)] text-xs font-medium text-[var(--color-primary)]">
                        <i data-lucide="heart" class="w-3.5 h-3.5 text-[var(--color-secondary)] fill-current"></i>
                        {{ $product['occasion'] }}
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[var(--color-section)] text-xs font-medium text-[var(--color-primary)]">
                        <i data-lucide="box" class="w-3.5 h-3.5 text-[var(--color-secondary)]"></i>
                        {{ $product['style'] }}
                    </span>
                </div>

                <!-- Call to Actions -->
                <div class="space-y-3">
                    <a 
                        href="https://wa.me/919876543210?text=Hello,%20I%20want%20to%20customize%20the%20{{ urlencode($product['title']) }}%20frame." 
                        target="_blank"
                        rel="noopener"
                        class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-colors shadow-xs"
                    >
                        <i data-lucide="message-square" class="w-5 h-5 text-[#25D366]"></i>
                        <span>Customize on WhatsApp</span>
                    </a>

                    <button 
                        type="button" 
                        @click="navigator.share ? navigator.share({ title: '{{ $product['title'] }}', url: window.location.href }) : alert('Link copied to clipboard!')"
                        class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl border border-[var(--color-border)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-section)] transition-colors"
                    >
                        <i data-lucide="share-2" class="w-4 h-4"></i>
                        <span>Share Product</span>
                    </button>
                </div>
            </div>

        </div>

        <!-- Product Description Card Grid -->
        <div class="bg-white rounded-2xl border border-[var(--color-border)] p-8 md:p-12 mb-16 shadow-xs">
            <h2 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-8 pb-4 border-b border-[var(--color-border)]">
                Product Description
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- About this Frame -->
                <div>
                    <div class="flex items-center gap-2 text-[var(--color-primary)] mb-3">
                        <i data-lucide="heart" class="w-5 h-5 text-[var(--color-secondary)]"></i>
                        <h3 class="font-heading text-lg font-bold">About this Frame</h3>
                    </div>
                    <p class="text-xs text-[var(--color-body)] leading-relaxed">
                        {{ $product['about'] ?? $product['tagline'] }}
                    </p>
                </div>

                <!-- Features -->
                <div>
                    <div class="flex items-center gap-2 text-[var(--color-primary)] mb-3">
                        <i data-lucide="star" class="w-5 h-5 text-[var(--color-secondary)]"></i>
                        <h3 class="font-heading text-lg font-bold">Features</h3>
                    </div>
                    <ul class="space-y-2 text-xs text-[var(--color-body)]">
                        @foreach($product['features'] ?? ['Handcrafted Design', 'Premium Finish'] as $feature)
                            <li class="flex items-start gap-2">
                                <span class="text-[var(--color-secondary)]">•</span>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Materials Used -->
                <div>
                    <div class="flex items-center gap-2 text-[var(--color-primary)] mb-3">
                        <i data-lucide="layers" class="w-5 h-5 text-[var(--color-secondary)]"></i>
                        <h3 class="font-heading text-lg font-bold">Materials Used</h3>
                    </div>
                    <ul class="space-y-2 text-xs text-[var(--color-body)]">
                        @foreach($product['materials'] ?? ['Premium Wood', 'Clear Glass'] as $material)
                            <li class="flex items-start gap-2">
                                <span class="text-[var(--color-secondary)]">•</span>
                                <span>{{ $material }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Care Instructions -->
                <div>
                    <div class="flex items-center gap-2 text-[var(--color-primary)] mb-3">
                        <i data-lucide="shield-check" class="w-5 h-5 text-[var(--color-secondary)]"></i>
                        <h3 class="font-heading text-lg font-bold">Care Instructions</h3>
                    </div>
                    <ul class="space-y-2 text-xs text-[var(--color-body)]">
                        @foreach($product['care'] ?? ['Keep away from moisture', 'Clean with dry cloth'] as $care)
                            <li class="flex items-start gap-2">
                                <span class="text-[var(--color-secondary)]">•</span>
                                <span>{{ $care }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Frame Lifestyle Gallery Grid -->
        <div class="mb-16">
            <h2 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-6">
                Frame Gallery
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($gallery as $img)
                    <a href="{{ asset($img) }}" class="glightbox rounded-xl overflow-hidden aspect-square border border-[var(--color-border)] group block">
                        <img src="{{ asset($img) }}" alt="Gallery Showcase" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Related Frames -->
        <div class="mb-16">
            <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[var(--color-primary)] mb-8">
                Related Frames
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(array_slice($relatedProducts, 0, 4) as $rel)
                    <x-cards.product-card :product="$rel" />
                @endforeach
            </div>
        </div>

        <!-- Customer Memory Wall Section -->
        <x-sections.memory-wall />

        <!-- FAQ Section -->
        <x-sections.faq />

    </div>
</div>
@endsection