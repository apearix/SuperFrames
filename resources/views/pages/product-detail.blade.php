@extends('layouts.app')

@php
    $products = include resource_path('data/products.php');
    $memories = include resource_path('data/memories.php');
    $faqs = include resource_path('data/faqs.php');

    $slug = $slug ?? (request()->route('slug') ?? 'forever-together');
    $product = collect($products)->firstWhere('slug', $slug) ?? $products[0];

    $gallery = $product['gallery'] ?? [$product['image']];
    $relatedProducts = array_values(array_filter($products, fn($p) => $p['id'] !== $product['id']));
@endphp

@section('title', $product['title'] . ' | SuperFrames')
@section('meta_description', $product['tagline'])

@section('content')
    <div class="bg-[var(--color-background)] pt-20">
        <div class="max-w-7xl mx-auto px-4  sm:px-0">
            <!-- Breadcrumbs -->
            <nav aria-label="Breadcrumb" class="flex items-center space-x-2 text-sm font-medium text-[#1D356B] py-3">
                <a href="/" class="hover:opacity-80 transition-opacity">Home</a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-[#C89A5B]/80 stroke-[2.2]"></i>
                <a href="{{ route('products') }}" class="hover:opacity-80 transition-opacity">Products</a>
                <i data-lucide="chevron-right" class="w-4 h-4 text-[#C89A5B]/80 stroke-[2.2]"></i>
                <span class="font-bold">{{ $product['title'] }}</span>

            </nav>

            <!-- Product Buy Box Section -->
            <div x-data="{ activeImage: '{{ asset($gallery[0]) }}' }" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start sapce-y-6 mb-6">

                <!-- Left: Gallery & Carousel -->
                <div class="lg:col-span-7">
                    <!-- Main Image Preview -->
                    <div
                        class="relative rounded-2xl overflow-hidden bg-white border border-[var(--color-border)] shadow-sm mb-4 aspect-4/3">
                        <img :src="activeImage" alt="{{ $product['title'] }}"
                            class="w-full h-full object-cover transition-all duration-300">
                        <!-- Fullscreen Lightbox Button -->
                        <a :href="activeImage"
                            class="glightbox absolute top-4 right-4 w-10 h-10 rounded-full bg-white/80 backdrop-blur-md text-[var(--color-primary)] flex items-center justify-center hover:bg-white shadow-xs transition-colors"
                            aria-label="Expand image">
                            <i data-lucide="maximize-2" class="w-5 h-5"></i>
                        </a>
                    </div>

                    <!-- Gallery Thumbnails Carousel -->
                    <div class="flex items-center gap-3 overflow-x-auto pb-2">
                        @foreach ($gallery as $img)
                            <button type="button" @click="activeImage = '{{ asset($img) }}'"
                                class="w-20 h-20 rounded-xl overflow-hidden border-2 shrink-0 transition-all"
                                :class="activeImage === '{{ asset($img) }}' ?
                                    'border-[var(--color-primary)] ring-2 ring-[var(--color-primary)]/20' :
                                    'border-[var(--color-border)] opacity-70 hover:opacity-100'">
                                <img src="{{ asset($img) }}" alt="Thumbnail" class="w-full h-full object-cover">
                            </button>
                        @endforeach
                    </div>
                </div>

                <!-- Right: Product Info & Actions -->
                <div class="lg:col-span-4">
                    <h1 class="font-heading text-4xl font-bold text-[var(--color-primary)] mb-2">
                        {{ $product['title'] }}
                    </h1>

                    <p class="text-xl text-[var(--color-primary)] mb-3">
                        Starting From <span class="font-bold text-[var(--color-primary)]">₹{{ $product['price'] }}</span>
                    </p>

                    <p class="text-sm text-[var(--color-body)] leading-relaxed mb-6">
                        {{ $product['tagline'] }}
                    </p>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[var(--color-section)] text-sm font-medium text-[var(--color-primary)]">
                            <i data-lucide="heart" class="w-3.5 h-3.5 text-[var(--color-primary)] fill-current"></i>
                            {{ $product['occasion'] }}
                        </span>
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[var(--color-section)] text-sm font-medium text-[var(--color-primary)]">
                            <i data-lucide="box" class="w-3.5 h-3.5 text-[var(--color-primary)]"></i>
                            {{ $product['style'] }}
                        </span>
                    </div>

                    <!-- Call to Actions -->
                    <div class="space-y-3">
                        <a href="https://wa.me/919876543210?text=Hello,%20I%20want%20to%20customize%20the%20{{ urlencode($product['title']) }}%20frame."
                            target="_blank" rel="noopener"
                            class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-colors shadow-xs">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 512.459"
                                class="w-4 h-4 text-white fill-current" aria-hidden="true">
                                <path fill="currentColor"
                                    d="M435.689 74.468C387.754 26.471 324 .025 256.071 0 116.098 0 2.18 113.906 2.131 253.916c-.024 44.758 11.677 88.445 33.898 126.946L0 512.459l134.617-35.311c37.087 20.238 78.85 30.891 121.345 30.903h.109c139.949 0 253.88-113.917 253.928-253.928.024-67.855-26.361-131.645-74.31-179.643v-.012zm-179.618 390.7h-.085c-37.868-.011-75.016-10.192-107.428-29.417l-7.707-4.577-79.886 20.953 21.32-77.889-5.017-7.987c-21.125-33.605-32.29-72.447-32.266-112.322.049-116.366 94.729-211.046 211.155-211.046 56.373.025 109.364 22.003 149.214 61.903 39.853 39.888 61.781 92.927 61.757 149.313-.05 116.377-94.728 211.058-211.057 211.058v.011zm115.768-158.067c-6.344-3.178-37.537-18.52-43.358-20.639-5.82-2.119-10.044-3.177-14.27 3.178-4.225 6.357-16.388 20.651-20.09 24.875-3.702 4.238-7.403 4.762-13.747 1.583-6.343-3.178-26.787-9.874-51.029-31.487-18.86-16.827-31.597-37.598-35.297-43.955-3.702-6.355-.39-9.789 2.775-12.943 2.849-2.848 6.344-7.414 9.522-11.116s4.225-6.355 6.343-10.581c2.12-4.238 1.06-7.937-.522-11.117-1.584-3.177-14.271-34.409-19.568-47.108-5.151-12.37-10.385-10.69-14.269-10.897-3.703-.183-7.927-.219-12.164-.219s-11.105 1.582-16.925 7.939c-5.82 6.354-22.209 21.709-22.209 52.927 0 31.22 22.733 61.405 25.911 65.642 3.177 4.237 44.745 68.318 108.389 95.812 15.135 6.538 26.957 10.446 36.175 13.368 15.196 4.834 29.027 4.153 39.96 2.52 12.19-1.825 37.54-15.353 42.824-30.172 5.283-14.818 5.283-27.529 3.701-30.172-1.582-2.641-5.819-4.237-12.163-7.414l.011-.024z" />
                            </svg>
                            <span>Customize on WhatsApp</span>
                        </a>

                        <button type="button"
                            @click="navigator.share ? navigator.share({ title: '{{ $product['title'] }}', url: window.location.href }) : alert('Link copied to clipboard!')"
                            class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl border-2 border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-section)] transition-colors">
                            <i data-lucide="share-2" class="w-4 h-4"></i>
                            <span>Share Product</span>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Product Description Card Grid -->
            <div class="bg-white rounded-2xl border border-[var(--color-border)]  p-6 pt-4 mb-6 shadow-xs space-y-6">
                <h2 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-4">
                    Product Description
                </h2>

                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 bg-white border-b lg:border-b-0 border-[var(--color-border)] ">
                    <!-- About this Frame -->
                    <div
                        class="pb-6 lg:pb-0 lg:pr-6 border-b lg:border-b-0 lg:border-r border-[var(--color-border)] space-y-2">
                        <i data-lucide="heart" class="w-8 h-8 text-[var(--color-primary)]"></i>

                        <h3 class="text-primary text-lg font-bold">About this Frame</h3>
                        <p class="text-sm font-semibold text-[var(--color-body)]/80 leading-relaxed">
                            {{ $product['about'] ?? $product['tagline'] }}
                        </p>
                    </div>

                    <!-- Features -->
                    <div
                        class="py-6 lg:py-0 lg:px-6 border-b lg:border-b-0 lg:border-r border-[var(--color-border)] space-y-2">
                        <i data-lucide="badge-check" class="w-8 h-8 text-[var(--color-primary)]"></i>

                        <h3 class="text-primary text-lg font-bold">Features</h3>
                        <ul
                            class="list-disc pl-5 space-y-2 text-sm font-semibold text-[var(--color-body)]/80 marker:text-[var(--color-primary)]">
                            @foreach ($product['features'] ?? ['Handcrafted Design', 'Premium Finish'] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Materials Used -->
                    <div
                        class="py-6 lg:py-0 lg:px-6 border-b lg:border-b-0 lg:border-r border-[var(--color-border)] space-y-2">
                        <i data-lucide="package" class="w-8 h-8 text-[var(--color-primary)]"></i>

                        <h3 class="text-primary text-lg font-bold">Materials Used</h3>
                        <ul
                            class="list-disc pl-5 space-y-2 text-sm font-semibold text-[var(--color-body)]/80 marker:text-[var(--color-primary)]">
                            @foreach ($product['materials'] ?? ['Premium Wood', 'Clear Glass'] as $material)
                                <li>{{ $material }}</li>
                            @endforeach
                        </ul>
                    </div>


                    <!-- Care Instructions -->
                    <div
                        class="py-6 lg:py-0 lg:px-6 border-b lg:border-b-0 lg:border-r border-[var(--color-border)] space-y-2">
                        <i data-lucide="shield-check" class="w-8 h-8 text-[var(--color-primary)]"></i>

                        <h3 class="text-primary text-lg font-bold">Care Instructions</h3>
                        <ul
                            class="list-disc pl-5 space-y-2 text-sm font-semibold text-[var(--color-body)]/80 marker:text-[var(--color-primary)]">
                            @foreach ($product['care'] ?? ['Keep away from moisture', 'Clean with dry cloth'] as $care)
                                <li>{{ $care }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <!-- Frame Lifestyle Gallery Grid -->
                <div class="">
                    <h2 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-4">
                        Frame Gallery
                    </h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        @foreach ($gallery as $img)
                            <a href="{{ asset($img) }}"
                                class="glightbox rounded-xl overflow-hidden aspect-square border border-[var(--color-border)] group block">
                                <img src="{{ asset($img) }}" alt="Gallery Showcase"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Related Frames -->
            <div class="mb-6">
                <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[var(--color-primary)] mb-8">
                    Related Frames
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach (array_slice($relatedProducts, 0, 4) as $rel)
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
