@extends('layouts.app')

@section('title', 'Shipping Info | Super Frames')

@section('content')
<div class="bg-[var(--color-background)] py-12 md:py-16 mt-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl border border-[var(--color-border)] p-8 sm:p-12 shadow-xs">
            <h1 class="font-heading text-3xl sm:text-4xl font-bold text-[var(--color-primary)] mb-6">Shipping & Delivery</h1>
            <div class="text-sm text-[var(--color-body)] leading-relaxed space-y-4">
                <p>We deliver handcrafted frames across all major cities and towns in India.</p>
                <h3 class="font-heading text-lg font-bold text-[var(--color-primary)]">Processing & Delivery Timeline</h3>
                <p>Custom frame preparation takes 2-4 business days. Dispatch and shipping via courier takes an additional 3-5 business days depending on your location.</p>
            </div>
        </div>
    </div>
</div>
@endsection