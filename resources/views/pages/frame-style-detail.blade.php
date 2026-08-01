@extends('layouts.app')

@php
    $styles = include resource_path('data/frame-styles.php');
    $products = include resource_path('data/products.php');
     
    $currentSlug = $slug ?? request()->route('slug') ?? '3d-shadow-box';
    $style = collect($styles)->firstWhere('slug', $currentSlug) ?? $styles[0];
 
    $styleProducts = array_filter($products, function($p) use ($style) {
        return ($p['style_slug'] ?? '') === $style['slug'] 
            || ($p['style'] ?? '') === $style['title'];
    }); 
    if (empty($styleProducts)) {
        $styleProducts = $products;
    }
@endphp

@section('title', $style['title'] . ' | SuperFrames')
@section('meta_description', $style['subtitle'])

@section('content')
<div class="bg-[var(--color-background)] py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
            <span class="mx-2">></span>
            <a href="/shop-by-frame-style" class="hover:text-[var(--color-primary)]">Frame Styles</a>
            <span class="mx-2">></span>
            <span class="text-[var(--color-primary)] font-medium">{{ $style['title'] }}</span>
        </nav>

        <!-- Style Header Banner -->
        <div class="bg-white rounded-2xl border border-[var(--color-border)] overflow-hidden p-8 md:p-12 mb-12 shadow-xs">
            <div class="max-w-3xl">
                <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-2">
                    {{ $style['eyebrow'] }} ♡
                </span>
                <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] mb-4">
                    {{ $style['title'] }}
                </h1>
                <p class="text-[var(--color-body)] text-base sm:text-lg leading-relaxed mb-6">
                    {{ $style['description'] }}
                </p>

                <!-- Features Badges -->
                <div class="flex flex-wrap gap-2">
                    @foreach($style['features'] as $feature)
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[var(--color-section)] text-xs font-medium text-[var(--color-primary)]">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-[var(--color-secondary)]"></i>
                            {{ $feature }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Filter & Product Grid Container -->
        <div x-data="{ selectedOccasion: 'all', selectedPrice: 'all', sortBy: 'default' }" class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Sidebar Filter -->
            <div class="lg:col-span-3">
                <x-forms.filter-form />
            </div>

            <!-- Products Listing -->
            <div class="lg:col-span-9">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($styleProducts as $product)
                        <x-cards.product-card :product="$product" />
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>
@endsection