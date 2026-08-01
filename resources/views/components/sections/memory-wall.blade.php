@extends('layouts.app')

@php
    $memories = include resource_path('data/memories.php');
@endphp

@section('title', 'Customer Memory Wall | SuperFrames')
@section('meta_description', 'Every handcrafted frame tells a unique story. Explore the beautiful memories shared by our happy customers.')

@section('content')
<div class="bg-[var(--color-background)] py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
            <span class="mx-2">></span>
            <span class="text-[var(--color-primary)] font-medium">Customer Memory Wall</span>
        </nav>

        <!-- Page Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Made with Love ♡
            </span>
            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Customer Memory Wall
            </h1>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-base">
                Every handcrafted frame tells a unique story. Explore the real memories shared by our happy customers across India.
            </p>
        </div>

        <!-- Full Memory Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
            @foreach($memories as $memory)
                <div class="group relative rounded-2xl overflow-hidden border border-[var(--color-border)] bg-white shadow-xs hover:shadow-lg transition-all duration-300">
                    <div class="aspect-4/3 overflow-hidden">
                        <img 
                            src="{{ asset($memory['image']) }}" 
                            alt="{{ $memory['name'] }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                        >
                    </div>

                    <!-- Customer Overlay Badge -->
                    <div class="absolute bottom-3 left-3 right-3 p-3 rounded-xl bg-black/60 backdrop-blur-md text-white flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shrink-0">
                                <img src="{{ asset($memory['avatar']) }}" alt="{{ $memory['name'] }}" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-heading text-sm font-bold leading-tight">{{ $memory['name'] }}</h3>
                                <p class="text-[10px] text-gray-300 uppercase tracking-wider">{{ $memory['occasion'] }}</p>
                            </div>
                        </div>
                        <button type="button" class="text-white/80 hover:text-red-400 transition-colors" aria-label="Favorite memory">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Share Your Memory Callout Banner -->
        <div class="bg-white p-8 md:p-12 rounded-2xl border border-[var(--color-border)] shadow-xs text-center max-w-3xl mx-auto">
            <h2 class="font-heading text-2xl sm:text-3xl font-bold text-[var(--color-primary)] mb-3">
                Inspired by These Memories?
            </h2>
            <p class="text-sm text-[var(--color-body)] mb-6">
                Create your own handcrafted personalized frame and turn your special moments into lifelong memories.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <a 
                    href="https://wa.me/919876543210?text=Hello,%20I%20want%20to%20order%20a%20customized%20photo%20frame." 
                    target="_blank"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-[var(--color-primary)] text-white text-sm font-medium hover:bg-[var(--color-primary-hover)] transition-colors shadow-xs"
                >
                    <i data-lucide="edit-3" class="w-4 h-4 text-[var(--color-secondary)]"></i>
                    <span>Customize Now</span>
                </a>
                <a 
                    href="https://wa.me/919876543210?text=Hello,%20I%20want%20to%20share%20a%20photo%20of%20my%20Super%20Frames%20creation!" 
                    target="_blank"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border border-[var(--color-border)] text-[var(--color-primary)] text-sm font-medium hover:bg-[var(--color-section)] transition-colors"
                >
                    <i data-lucide="camera" class="w-4 h-4"></i>
                    <span>Share Your Memory</span>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection