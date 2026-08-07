@extends('layouts.app')

@section('title', $pageTitle . ' | SuperFrames')
@section('meta_description',
    'Discover handcrafted personalized frames designed to celebrate life\'s beautiful
    moments.')

@section('content')
    <div class="bg-[var(--color-background)] min-h-screen py-20">
        <!-- 1. HERO BANNER -->
        <section
            class="relative w-full min-h-[350px]  bg-[#FCFAF6] py-12 md:py-16 overflow-hidden border-b border-[var(--color-border)]">

            <!-- RIGHT SIDE DECORATIVE IMAGE -->
            <div
                class="absolute top-0 right-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-right">
                <div class="relative h-full w-full">
                    <!-- Natural Blend Gradient Mask -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#FCFAF6] via-[#FCFAF6]/70 to-transparent z-10 lg:via-[#FCFAF6]/10">
                    </div>
                    <!-- Image Container -->
                    <img src="{{ asset('images/products/hero-banner.png') }}"
                        alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                        class="h-full w-full object-cover object-right-center" />
                </div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">

                    <!-- Text Content -->
                    <div>
                        <h1 class="font-serif text-4xl sm:text-5xl text-[var(--color-primary)] mb-4">
                            {{ $pageTitle }}
                        </h1>
                        <p class="text-[var(--color-body)] text-sm sm:text-xl max-w-lg mb-6">
                            Discover handcrafted personalized frames designed to celebrate life's beautiful moments.
                        </p>

                        <!-- Breadcrumbs -->
                        <nav aria-label="Breadcrumb" class="flex items-center space-x-2 text-sm font-medium text-[#1D356B]">
                            <a href="/" class="hover:opacity-80 transition-opacity">Home</a>
                            <i data-lucide="chevron-right" class="w-4 h-4 text-[#C89A5B]/80 stroke-[2.2]"></i>
                            <span class="font-bold">{{ $pageTitle }}</span>

                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <!-- 2. FILTER BAR SECTION -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 -mt-6 relative z-20">
            <form id="filter-form" action="{{ url('/products') }}" method="GET"
                class="bg-white p-4 sm:p-6 rounded-2xl shadow-md border border-[var(--color-border)]">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-end">

                    <!-- Occasion Filter -->
                    <div>
                        <label for="occasion" class="block text-xs font-semibold text-gray-700 mb-1.5">Occasion</label>
                        <select name="occasion" id="occasion" onchange="this.form.submit()"
                            class="w-full text-xs bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-gray-800 focus:outline-none focus:border-[var(--color-primary)]">
                            <option value="all">All Occasions</option>
                            @foreach (['Anniversary', 'Birthday', 'Baby', 'Pet', 'Wedding', 'Graduation', 'Friendship', 'Family'] as $occ)
                                <option value="{{ strtolower($occ) }}"
                                    {{ request('occasion') == strtolower($occ) ? 'selected' : '' }}>
                                    {{ $occ }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Frame Style Filter -->
                    <div>
                        <label for="style" class="block text-xs font-semibold text-gray-700 mb-1.5">Frame Style</label>
                        <select name="style" id="style" onchange="this.form.submit()"
                            class="w-full text-xs bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-gray-800 focus:outline-none focus:border-[var(--color-primary)]">
                            <option value="all">All Styles</option>
                            @foreach ($styles as $st)
                                <option value="{{ $st['slug'] }}" {{ request('style') == $st['slug'] ? 'selected' : '' }}>
                                    {{ $st['title'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Price Range Filter -->
                    <div>
                        <div class="flex justify-between text-xs font-semibold text-gray-700 mb-1.5">
                            <span>Price Range</span>
                            <span class="text-[var(--color-primary)]">₹500 - ₹{{ request('max_price', 5000) }}</span>
                        </div>
                        <input type="range" name="max_price" min="500" max="5000" step="100"
                            value="{{ request('max_price', 5000) }}" onchange="this.form.submit()"
                            class="w-full accent-[var(--color-primary)] cursor-pointer">
                    </div>

                    <!-- Sort By Filter -->
                    <div>
                        <label for="sort" class="block text-xs font-semibold text-gray-700 mb-1.5">Sort By</label>
                        <select name="sort" id="sort" onchange="this.form.submit()"
                            class="w-full text-xs bg-gray-50 border border-gray-200 rounded-lg p-2.5 text-gray-800 focus:outline-none focus:border-[var(--color-primary)]">
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                            <option value="bestseller" {{ request('sort') == 'bestseller' ? 'selected' : '' }}>Best Seller
                            </option>
                            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to
                                High</option>
                            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High
                                to Low</option>
                        </select>
                    </div>

                    <!-- Clear Filters Button -->
                    <div>
                        <a href="{{ url('/products') }}"
                            class="w-full inline-flex items-center justify-center gap-1.5 px-4 py-3 border border-gray-300 rounded-lg text-xs font-semibold text-gray-700 hover:bg-gray-50 transition-colors">
                            <i data-lucide="rotate-ccw" class="w-3.5 h-3.5"></i> Clear Filters
                        </a>
                    </div>

                </div>
            </form>
        </section>

        <!-- 3. PRODUCTS GRID -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 mt-12">
            @if ($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($products as $product)
                        <x-cards.product-card :product="$product" />
                    @endforeach
                </div>

                <!-- Custom Pagination Render -->
                <div class="mt-8">
                    {{ $products->links() }}
                </div>
            @else
                <div
                    class="bg-white border border-[var(--color-border)] rounded-3xl py-20 px-6 text-center flex flex-col items-center">

                    <!-- Icon -->
                    <div
                        class="w-20 h-20 rounded-full bg-[var(--color-primary)]/5 border border-[var(--color-primary)]/10 flex items-center justify-center mb-6">
                        <i data-lucide="image-off" class="w-10 h-10 text-[var(--color-primary)]"></i>
                    </div>

                    <!-- Heading -->
                    <h3 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-3">
                        No Frames Found
                    </h3>

                    <!-- Description -->
                    <p class="max-w-md text-sm text-[var(--color-body)] leading-relaxed mb-8">
                        We couldn't find any frames matching your current filters.
                        Try changing your selection or reset the filters to explore our handcrafted collections.
                    </p>

                    <!-- Button -->
                    <a href="{{ url('/products') }}"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-[var(--color-primary)] text-white font-medium text-sm shadow-sm hover:bg-[var(--color-primary)]/90 transition-all duration-300">
                        <i data-lucide="rotate-ccw" class="w-4 h-4"></i>
                        <span>Reset Filters</span>
                    </a>

                </div>
            @endif
        </section>

        <!-- 5. HELP CTA BANNER -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 mt-8 relative overflow-hidden">

            <div
                class=" bg-[#ead5c2] rounded-3xl border border-[var(--color-border)] p-8 md:p-12 text-center relative overflow-hidden shadow-xs">
                <div
                    class="absolute top-0 right-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-right">
                    <div class="relative h-full w-full">
                        <!-- Natural Blend Gradient Mask -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-[#ead5c2] via-[#ead5c2]/70 to-transparent z-10 lg:via-[#ead5c2]/40">
                        </div>

                        <!-- Image Container -->
                        <img src="{{ asset('images/products/cta-right.png') }}"
                            alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                            class="h-full w-full object-cover object-right-center" />
                    </div>
                </div>
                <div
                    class="absolute top-0 left-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-left">
                    <div class="relative h-full w-full">
                        <!-- Natural Blend Gradient Mask -->
                        <div
                            class="absolute inset-0 bg-gradient-to-l from-[#ead5c2] via-[#ead5c2]/70 to-transparent z-10 lg:via-[#ead5c2]/40">
                        </div>

                        <!-- Image Container -->
                        <img src="{{ asset('images/products/cta-left.png') }}"
                            alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                            class="h-full w-full object-cover object-right-center" />
                    </div>
                </div>
                <div class="relative z-10">
                    <h2 class="font-serif text-2xl md:text-3xl font-bold text-[var(--color-primary)] mb-2">
                        Need Help Choosing the Perfect Frame?
                    </h2>
                    <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-secondary)]">
                        <span class="h-[1px] w-12 bg-[var(--color-primary)]/30"></span>
                        <span class="text-[var(--color-primary)]"> <i data-lucide="heart" class="w-4 h-4 "></i></span>
                        <span class="h-[1px] w-12 bg-[var(--color-primary)]/30"></span>
                    </div>

                    <p class="text-xs md:text-sm text-[var(--color-body)] max-w-xl mx-auto mb-6">
                        We're here to help you find a handcrafted frame that perfectly matches your occasion and memories.
                    </p>
                    <a href="https://wa.me/919876543210?text=Hi%20SuperFrames,%20I%20need%20help%20choosing%20the%20perfect%20frame!"
                        target="_blank"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#0c2556] hover:bg-[#12306c] text-white font-semibold text-sm rounded-xl shadow-md transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 512.459"
                            class="w-4 h-4 text-white fill-current" aria-hidden="true">
                            <path fill="currentColor"
                                d="M435.689 74.468C387.754 26.471 324 .025 256.071 0 116.098 0 2.18 113.906 2.131 253.916c-.024 44.758 11.677 88.445 33.898 126.946L0 512.459l134.617-35.311c37.087 20.238 78.85 30.891 121.345 30.903h.109c139.949 0 253.88-113.917 253.928-253.928.024-67.855-26.361-131.645-74.31-179.643v-.012zm-179.618 390.7h-.085c-37.868-.011-75.016-10.192-107.428-29.417l-7.707-4.577-79.886 20.953 21.32-77.889-5.017-7.987c-21.125-33.605-32.29-72.447-32.266-112.322.049-116.366 94.729-211.046 211.155-211.046 56.373.025 109.364 22.003 149.214 61.903 39.853 39.888 61.781 92.927 61.757 149.313-.05 116.377-94.728 211.058-211.057 211.058v.011zm115.768-158.067c-6.344-3.178-37.537-18.52-43.358-20.639-5.82-2.119-10.044-3.177-14.27 3.178-4.225 6.357-16.388 20.651-20.09 24.875-3.702 4.238-7.403 4.762-13.747 1.583-6.343-3.178-26.787-9.874-51.029-31.487-18.86-16.827-31.597-37.598-35.297-43.955-3.702-6.355-.39-9.789 2.775-12.943 2.849-2.848 6.344-7.414 9.522-11.116s4.225-6.355 6.343-10.581c2.12-4.238 1.06-7.937-.522-11.117-1.584-3.177-14.271-34.409-19.568-47.108-5.151-12.37-10.385-10.69-14.269-10.897-3.703-.183-7.927-.219-12.164-.219s-11.105 1.582-16.925 7.939c-5.82 6.354-22.209 21.709-22.209 52.927 0 31.22 22.733 61.405 25.911 65.642 3.177 4.237 44.745 68.318 108.389 95.812 15.135 6.538 26.957 10.446 36.175 13.368 15.196 4.834 29.027 4.153 39.96 2.52 12.19-1.825 37.54-15.353 42.824-30.172 5.283-14.818 5.283-27.529 3.701-30.172-1.582-2.641-5.819-4.237-12.163-7.414l.011-.024z" />
                        </svg>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>
            </div>
        </section>

    </div>
@endsection
