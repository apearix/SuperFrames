@extends('layouts.app')

@php
    $occasions = include resource_path('data/occasions.php');
@endphp

@section('title', 'Shop by Occasion | SuperFrames')
@section('meta_description', 'Find the perfect handcrafted photo frame for every occasion - Anniversary, Birthday, Baby, Wedding, Pet, and Graduation.')

@section('content')
<div class="bg-[var(--color-background)] py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)] transition-colors">Home</a>
            <span class="mx-2 text-gray-300">></span>
            <span class="text-[var(--color-primary)] font-medium">Shop by Occasion</span>
        </nav>

        <!-- Header Banner -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Gifts for Every Milestone ♡
            </span>
            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Shop by Occasion
            </h1>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed">
                Celebrate birthdays, anniversaries, weddings, newborn arrivals, and every special moment with a personalized handcrafted photo frame.
            </p>
        </div>

        <!-- Occasions Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($occasions as $occ)
                <div class="group bg-white rounded-3xl border border-[var(--color-border)] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    
                    <!-- Card Image Banner -->
                    <div class="relative h-60 overflow-hidden bg-[var(--color-section)]">
                        <img 
                            src="{{ asset($occ['banner_image'] ?? 'images/banners/anniversary-banner.jpg') }}" 
                            alt="{{ $occ['title'] }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <span class="absolute bottom-4 left-6 font-eyebrow text-sm text-[var(--color-secondary)] drop-shadow-xs">
                            {{ $occ['eyebrow'] ?? 'Made for Memories' }}
                        </span>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between">
                        <div>
                            <h2 class="font-heading text-2xl font-bold text-[var(--color-primary)] mb-2">
                                {{ $occ['title'] }}
                            </h2>
                            <p class="text-xs text-[var(--color-body)] leading-relaxed mb-6">
                                {{ $occ['subtitle'] ?? $occ['description'] }}
                            </p>
                        </div>

                        <a 
                            href="/occasion/{{ $occ['slug'] }}" 
                            class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-xl border border-[var(--color-primary)] text-[var(--color-primary)] font-semibold text-xs hover:bg-[var(--color-primary)] hover:text-white transition-all duration-300 shadow-xs"
                        >
                            <span>Explore {{ $occ['title'] }}</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection