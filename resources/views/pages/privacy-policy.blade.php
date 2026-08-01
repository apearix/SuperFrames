@extends('layouts.app')

@section('title', 'Privacy Policy | Super Frames')

@section('content')
<div class="bg-[var(--color-background)] py-12 md:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl border border-[var(--color-border)] p-8 sm:p-12 shadow-xs">
            <h1 class="font-heading text-3xl sm:text-4xl font-bold text-[var(--color-primary)] mb-6">
                Privacy Policy
            </h1>
            <p class="text-xs text-[var(--color-body)] mb-6">Last updated: January 2026</p>
            <div class="prose max-w-none text-sm text-[var(--color-body)] leading-relaxed space-y-4">
                <p>At Super Frames, accessible from superframes.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Super Frames and how we use it.</p>
                <h3 class="font-heading text-lg font-bold text-[var(--color-primary)]">Information We Collect</h3>
                <p>We collect personal information that you voluntarily provide to us when you inquire about custom orders via WhatsApp or email, including your name, delivery address, phone number, and custom photos shared for customization.</p>
                <h3 class="font-heading text-lg font-bold text-[var(--color-primary)]">How We Use Your Photos</h3>
                <p>Photos shared with us for frame customization are strictly used for crafting your specific frame order. We never sell, distribute, or share your personal photographs with third parties.</p>
            </div>
        </div>
    </div>
</div>
@endsection