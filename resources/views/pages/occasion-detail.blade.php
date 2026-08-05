@extends('layouts.app')

@php
    $occasions = include resource_path('data/occasions.php');
    $products = include resource_path('data/products.php');

    $currentSlug = $slug ?? (request()->route('slug') ?? 'anniversary');
    $occasion = collect($occasions)->firstWhere('slug', $currentSlug) ?? $occasions[0];

    // Filter products matching this occasion or fallback to all
    $occasionProducts = array_values(
        array_filter($products, function ($p) use ($occasion) {
            return strtolower($p['occasion'] ?? '') === strtolower($occasion['slug']) ||
                strtolower($p['occasion'] ?? '') === strtolower(str_replace(' frames', '', $occasion['title']));
        }),
    );

    if (empty($occasionProducts)) {
        $occasionProducts = $products;
    }
@endphp

@section('title', $occasion['title'] . ' | SuperFrames')
@section('meta_description', $occasion['subtitle'])

@section('content')
    <div class="bg-[var(--color-background)] py-10 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Breadcrumbs -->
            <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
                <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
                <span class="mx-2">></span>
                <a href="/shop-by-occasion" class="hover:text-[var(--color-primary)]">Occasions</a>
                <span class="mx-2">></span>
                <span class="text-[var(--color-primary)] font-medium">{{ $occasion['title'] }}</span>
            </nav>

            <!-- Header Banner -->
            <div
                class="bg-white rounded-2xl border border-[var(--color-border)] overflow-hidden p-8 md:p-12 mb-12 shadow-xs">
                <div class="max-w-3xl">
                    <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-2">
                        {{ $occasion['eyebrow'] }} ♡
                    </span>
                    <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] mb-4">
                        {{ $occasion['title'] }}
                    </h1>
                    <p class="text-[var(--color-body)] text-base sm:text-lg leading-relaxed">
                        {{ $occasion['description'] }}
                    </p>
                </div>
            </div>

            <!-- Filter & Product Grid -->
            <div x-data="{ selectedOccasion: 'all', selectedPrice: 'all', sortBy: 'default' }" class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- Sidebar Filter -->
                <div class="lg:col-span-3">
                    <x-forms.filter-form />
                </div>

                <!-- Products Listing -->
                <div class="lg:col-span-9">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach ($occasionProducts as $product)
                            <x-cards.product-card :product="$product" />
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
