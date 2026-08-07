@extends('layouts.app')

@php
    $products = include resource_path('data/products.php');
@endphp

@section('title', 'Handcrafted Frame Gallery | Super Frames')
@section('meta_description',
    'Browse our complete gallery of handcrafted photo frames, 3D shadow boxes, and quilling
    art.')

@section('content')
    <div class="bg-[var(--color-background)] py-10 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <!-- Breadcrumbs -->
            <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
                <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
                <span class="mx-2">></span>
                <span class="text-[var(--color-primary)] font-medium">Gallery</span>
            </nav>

            <!-- Header -->
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)]">
                    Handcrafted Frame Gallery
                </h1>
                <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                    <i data-lucide="heart" class="w-4 h-4"></i>
                    <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <a href="{{ asset($product['image']) }}"
                        class="glightbox block group rounded-2xl overflow-hidden border border-[var(--color-border)] aspect-square bg-white shadow-xs">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                @endforeach
            </div>

        </div>
    </div>
@endsection
