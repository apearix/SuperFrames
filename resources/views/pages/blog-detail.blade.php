@extends('layouts.app')

@php
    $blogs = include resource_path('data/blogs.php');
    $slug = $slug ?? request()->route('slug') ?? 'anniversary-gift-ideas';
    $blog = collect($blogs)->firstWhere('slug', $slug) ?? $blogs[0];
@endphp

@section('title', $blog['title'] . ' | Super Frames Blog')
@section('meta_description', $blog['excerpt'])

@section('content')
<div class="bg-[var(--color-background)] py-10 md:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
            <span class="mx-2">></span>
            <a href="/blog" class="hover:text-[var(--color-primary)]">Blog</a>
            <span class="mx-2">></span>
            <span class="text-[var(--color-primary)] font-medium">{{ $blog['title'] }}</span>
        </nav>

        <!-- Article Banner -->
        <div class="bg-white rounded-3xl border border-[var(--color-border)] overflow-hidden p-8 sm:p-12 mb-12 shadow-xs">
            <h1 class="font-heading text-3xl sm:text-5xl font-bold text-[var(--color-primary)] mb-4">
                {{ $blog['title'] }}
            </h1>
            <p class="text-sm text-[var(--color-body)] mb-6 leading-relaxed">
                {{ $blog['excerpt'] }}
            </p>

            <div class="rounded-2xl overflow-hidden aspect-16/9 mb-8">
                <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}" class="w-full h-full object-cover">
            </div>

            <!-- Content Area -->
            <div class="prose max-w-none text-sm text-[var(--color-body)] leading-relaxed space-y-4">
                <p>Photographs hold our happiest moments, but a handcrafted frame brings those moments to life. Whether you are celebrating a 1st anniversary or a golden 50th jubilee, personalized photo frames serve as timeless physical reminders of your shared journey.</p>
                <h3 class="font-heading text-xl font-bold text-[var(--color-primary)] mt-6 mb-2">1. 3D Illuminated Shadow Boxes</h3>
                <p>With warm ambient LED lighting and laser-cut wooden elements, 3D shadow boxes add depth and romance to couple portraits.</p>
                <h3 class="font-heading text-xl font-bold text-[var(--color-primary)] mt-6 mb-2">2. Hand-rolled Quilling Name Frames</h3>
                <p>For something intricate and artistic, paper quilling crafts personalized couple names and wedding dates using acid-free paper strips.</p>
            </div>
        </div>

    </div>
</div>
@endsection