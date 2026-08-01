@extends('layouts.empty')

@section('title', 'Page Not Found | Super Frames')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 sm:p-12 rounded-3xl border border-[var(--color-border)] shadow-md text-center max-w-md w-full">
        <div class="w-16 h-16 mx-auto rounded-full bg-[var(--color-section)] text-[var(--color-primary)] flex items-center justify-center mb-6">
            <i data-lucide="image-off" class="w-8 h-8"></i>
        </div>
        <h1 class="font-heading text-5xl font-bold text-[var(--color-primary)] mb-2">404</h1>
        <h2 class="font-heading text-xl font-bold text-[var(--color-heading)] mb-4">Frame Not Found</h2>
        <p class="text-xs text-[var(--color-body)] leading-relaxed mb-8">
            The page or frame you are looking for might have been moved or is no longer available.
        </p>
        <a href="/" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-[var(--color-primary)] text-white text-sm font-medium hover:bg-[var(--color-primary-hover)] transition-colors shadow-xs">
            <i data-lucide="home" class="w-4 h-4"></i>
            <span>Return to Homepage</span>
        </a>
    </div>
</div>
@endsection