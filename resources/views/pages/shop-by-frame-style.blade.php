@extends('layouts.app')

@php
    $styles = include resource_path('data/frame-styles.php');
@endphp

@section('title', 'Shop by Frame Style | SuperFrames')
@section('meta_description',
    'Explore our handcrafted frame styles, from 3D Shadow Boxes to Quilling Name Frames and
    Mini Desk Frames.')

@section('content')
    <div class="bg-[var(--color-background)] py-10 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Breadcrumbs -->
            <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
                <a href="/" class="hover:text-[var(--color-primary)] transition-colors">Home</a>
                <span class="mx-2 text-gray-300">></span>
                <span class="text-[var(--color-primary)] font-medium">Shop by Frame Style</span>
            </nav>

            <!-- Header Banner -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                    Crafted for Every Memory ♡
                </span>
                <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                    Shop by Frame Style
                </h1>
                <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                    <i data-lucide="heart" class="w-4 h-4"></i>
                    <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                </div>
                <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed">
                    Explore our handcrafted frame styles, thoughtfully designed to preserve your most cherished memories
                    with elegance and craftsmanship.
                </p>
            </div>

            <!-- Frame Styles Image-Rich Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($styles as $style)
                    <div
                        class="group bg-white rounded-3xl border border-[var(--color-border)] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">

                        <!-- Card Top Image Header -->
                        <div class="relative h-64 overflow-hidden bg-[var(--color-section)]">
                            <img src="{{ asset($style['banner_image'] ?? $style['image']) }}" alt="{{ $style['title'] }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            </div>
                            <span
                                class="absolute bottom-4 left-6 font-eyebrow text-sm text-[var(--color-secondary)] drop-shadow-xs">
                                {{ $style['eyebrow'] }}
                            </span>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                            <div>
                                <h2 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-3">
                                    {{ $style['title'] }}
                                </h2>
                                <p class="text-xs text-[var(--color-body)] leading-relaxed mb-6">
                                    {{ $style['subtitle'] }}
                                </p>

                                <!-- Features List -->
                                <div class="space-y-2 mb-6">
                                    @foreach (array_slice($style['features'], 0, 3) as $feature)
                                        <div class="flex items-center gap-2 text-xs text-[var(--color-heading)]">
                                            <i data-lucide="check-circle-2"
                                                class="w-3.5 h-3.5 text-[var(--color-secondary)] shrink-0"></i>
                                            <span>{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <a href="/frame-style/{{ $style['slug'] }}"
                                class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl border border-[var(--color-primary)] text-[var(--color-primary)] font-semibold text-xs hover:bg-[var(--color-primary)] hover:text-white transition-all duration-300 shadow-xs">
                                <span>Explore Collection</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
