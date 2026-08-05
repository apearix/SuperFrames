@extends('layouts.app')

@php
    $products = include resource_path('data/products.php');
    $bestsellers = array_values(array_filter($products, fn($p) => $p['is_bestseller'] ?? false));
@endphp

@section('title', 'Best Sellers | SuperFrames')
@section('meta_description', 'Discover our most loved handcrafted photo frames, carefully designed to turn life\'s
    beautiful moments into timeless keepsakes.')

@section('content')
    <div class="bg-[var(--color-background)] py-10 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Breadcrumbs -->
            <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
                <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
                <span class="mx-2">></span>
                <span class="text-[var(--color-primary)] font-medium">Best Sellers</span>
            </nav>

            <!-- Header Banner -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                    Customer Favorites ♡
                </span>
                <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                    Best Sellers
                </h1>
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

            <!-- Filter & Product Grid -->
            <div x-data="{ selectedOccasion: 'all', selectedPrice: 'all', sortBy: 'default' }" class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- Sidebar Filter -->
                <div class="lg:col-span-3">
                    <x-forms.filter-form />
                </div>

                <!-- Product Cards Grid -->
                <div class="lg:col-span-9">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($bestsellers as $product)
                            <x-cards.product-card :product="$product" />
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
