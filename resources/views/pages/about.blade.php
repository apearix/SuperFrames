@extends('layouts.app')

@php
    $about = include resource_path('data/about.php');
@endphp

@section('title', 'About Super Frames | Our Story & Craftsmanship')
@section('meta_description', 'Learn about Super Frames, founded by Shailendra. Discover our story, values, and 4-step process of turning memories into handcrafted art.')

@section('content')
<div class="bg-[var(--color-background)] py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
            <span class="mx-2">></span>
            <span class="text-[var(--color-primary)] font-medium">About Us</span>
        </nav>

        <!-- Page Header -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] mb-2">
                About Super Frames
            </h1>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-base leading-relaxed">
                Every handcrafted frame is created with passion, creativity, and attention to every little detail, preserving memories that last forever.
            </p>
        </div>

        <!-- Creator Spotlight Card -->
        <div class="bg-white rounded-3xl border border-[var(--color-border)] shadow-xs overflow-hidden p-8 lg:p-12 mb-20 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-5 relative flex justify-center">
                <div class="w-72 h-72 sm:w-80 sm:h-80 rounded-full overflow-hidden border-4 border-[var(--color-section)] shadow-md">
                    <img src="{{ asset($about['creator']['image']) }}" alt="{{ $about['creator']['name'] }}" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-7">
                <span class="text-xs uppercase tracking-widest text-[var(--color-secondary)] font-semibold mb-2 block">
                    MEET THE CREATOR
                </span>
                <h2 class="font-heading text-4xl font-bold text-[var(--color-primary)] mb-3">
                    {{ $about['creator']['name'] }}
                </h2>
                <div class="flex items-center gap-2 my-3 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/40"></span>
                    <i data-lucide="heart" class="w-3.5 h-3.5 fill-current"></i>
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/40"></span>
                </div>
                <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed mb-6">
                    {{ $about['creator']['bio'] }}
                </p>
                <div class="font-eyebrow text-2xl text-[var(--color-primary)]">
                    — {{ $about['creator']['signature_text'] }}
                </div>
            </div>
        </div>

        <!-- Why Choose Super Frames Grid -->
        <div class="mb-20">
            <div class="text-center max-w-xl mx-auto mb-12">
                <h2 class="font-heading text-3xl sm:text-4xl font-bold text-[var(--color-primary)]">
                    Why Choose Super Frames
                </h2>
                <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                    <i data-lucide="heart" class="w-3.5 h-3.5 fill-current"></i>
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($about['values'] as $val)
                    <div class="bg-white p-6 rounded-2xl border border-[var(--color-border)] shadow-xs text-center">
                        <div class="w-14 h-14 mx-auto rounded-full bg-[var(--color-section)] flex items-center justify-center text-[var(--color-primary)] mb-4">
                            <i data-lucide="{{ $val['icon'] }}" class="w-6 h-6"></i>
                        </div>
                        <h3 class="font-heading text-lg font-bold text-[var(--color-primary)] mb-2">{{ $val['title'] }}</h3>
                        <p class="text-xs text-[var(--color-body)] leading-relaxed">{{ $val['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Our Process -->
        <div class="mb-20">
            <div class="text-center max-w-xl mx-auto mb-12">
                <h2 class="font-heading text-3xl sm:text-4xl font-bold text-[var(--color-primary)]">
                    Our Process
                </h2>
                <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                    <i data-lucide="heart" class="w-3.5 h-3.5 fill-current"></i>
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($about['process'] as $proc)
                    <div class="text-center flex flex-col items-center">
                        <div class="relative w-28 h-28 rounded-full overflow-hidden border-4 border-white shadow-md mb-4">
                            <img src="{{ asset($proc['image']) }}" alt="{{ $proc['title'] }}" class="w-full h-full object-cover">
                            <span class="absolute bottom-1 right-1 w-7 h-7 rounded-full bg-[var(--color-primary)] text-white text-xs font-bold flex items-center justify-center">
                                {{ $proc['step'] }}
                            </span>
                        </div>
                        <h3 class="font-heading text-lg font-bold text-[var(--color-primary)] mb-2">{{ $proc['title'] }}</h3>
                        <p class="text-xs text-[var(--color-body)] leading-relaxed">{{ $proc['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Bottom CTA Banner -->
        <div class="bg-[var(--color-section)] rounded-2xl border border-[var(--color-border)] p-8 md:p-12 text-center max-w-4xl mx-auto shadow-xs">
            <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[var(--color-primary)] mb-3">
                Let's Turn Your Memories Into Timeless Art
            </h2>
            <div class="flex items-center justify-center gap-2 mb-6 text-[var(--color-secondary)]">
                <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-3.5 h-3.5 fill-current"></i>
                <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-sm text-[var(--color-body)] max-w-xl mx-auto mb-8">
                Whether it's a birthday, anniversary, wedding, baby, graduation, or family celebration, we're here to create a handcrafted frame that's uniquely yours.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/best-sellers" class="px-6 py-3 rounded-lg bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-colors shadow-xs flex items-center gap-2">
                    <i data-lucide="layout-grid" class="w-4 h-4"></i> Browse Collection
                </a>
                <a href="https://wa.me/919876543210" target="_blank" class="px-6 py-3 rounded-lg border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-primary)] hover:text-white transition-colors flex items-center gap-2">
                    <i data-lucide="message-square" class="w-4 h-4 text-[#25D366]"></i> Customize on WhatsApp
                </a>
            </div>
        </div>

    </div>
</div>
@endsection