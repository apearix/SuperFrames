@extends('layouts.empty')

@section('title', 'Server Error | Super Frames')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 sm:p-12 rounded-3xl border border-[var(--color-border)] shadow-md text-center max-w-md w-full">
        <div class="w-16 h-16 mx-auto rounded-full bg-red-50 text-red-600 flex items-center justify-center mb-6">
            <i data-lucide="alert-triangle" class="w-8 h-8"></i>
        </div>
        <h1 class="font-heading text-5xl font-bold text-[var(--color-primary)] mb-2">500</h1>
        <h2 class="font-heading text-xl font-bold text-[var(--color-heading)] mb-4">Something Went Wrong</h2>
        <p class="text-xs text-[var(--color-body)] leading-relaxed mb-8">
            We encountered a temporary issue. Please try refreshing the page or return home.
        </p>
        <a href="/" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-[var(--color-primary)] text-white text-sm font-medium hover:bg-[var(--color-primary-hover)] transition-colors shadow-xs">
            <i data-lucide="home" class="w-4 h-4"></i>
            <span>Return to Homepage</span>
        </a>
    </div>
</div>
@endsection