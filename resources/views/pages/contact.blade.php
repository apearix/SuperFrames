@extends('layouts.app')

@section('title', 'Contact Us | Super Frames')

@section('content')
<div class="bg-[var(--color-background)] py-12 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-xs text-[var(--color-body)] mb-8" aria-label="Breadcrumb">
            <a href="/" class="hover:text-[var(--color-primary)]">Home</a>
            <span class="mx-2">></span>
            <span class="text-[var(--color-primary)] font-medium">Contact Us</span>
        </nav>

        <!-- Page Heading -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)]">
                Contact Us
            </h1>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-sm sm:text-base">
                Have a question or planning a personalized frame?<br>
                We'd love to help you create something truly memorable.
            </p>
        </div>

        @php
            $contact = include resource_path('data/contact.php');
        @endphp

        <!-- Address & WhatsApp Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <!-- Business Address -->
            <div class="bg-white p-8 rounded-2xl border border-[var(--color-border)] shadow-xs flex items-start gap-5">
                <div class="w-12 h-12 rounded-full bg-[var(--color-primary)] text-white flex items-center justify-center shrink-0">
                    <i data-lucide="map-pin" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="font-heading text-xl font-bold text-[var(--color-primary)] mb-2">
                        {{ $contact['address']['title'] }}
                    </h3>
                    <p class="font-semibold text-sm text-[var(--color-heading)] mb-1">{{ $contact['address']['name'] }}</p>
                    <p class="text-sm text-[var(--color-body)] leading-relaxed mb-4">
                        {{ $contact['address']['line1'] }}<br>
                        {{ $contact['address']['city_state_zip'] }}
                    </p>
                    <a href="{{ $contact['address']['map_link'] }}" target="_blank" class="inline-flex items-center text-xs font-semibold text-[var(--color-secondary)] hover:underline">
                        <i data-lucide="map" class="w-4 h-4 mr-1"></i> Get Directions
                    </a>
                </div>
            </div>

            <!-- WhatsApp Direct -->
            <div class="bg-white p-8 rounded-2xl border border-[var(--color-border)] shadow-xs flex items-start gap-5">
                <div class="w-12 h-12 rounded-full bg-[var(--color-primary)] text-white flex items-center justify-center shrink-0">
                    <i data-lucide="message-circle" class="w-6 h-6"></i>
                </div>
                <div class="flex-1">
                    <h3 class="font-heading text-xl font-bold text-[var(--color-primary)] mb-2">
                        {{ $contact['whatsapp']['title'] }}
                    </h3>
                    <p class="text-2xl font-bold text-[var(--color-primary)] font-heading mb-1">
                        {{ $contact['whatsapp']['phone'] }}
                    </p>
                    <p class="text-sm text-[var(--color-body)] mb-6">
                        {{ $contact['whatsapp']['note'] }}
                    </p>
                    <a href="{{ $contact['whatsapp']['chat_link'] }}" target="_blank" class="inline-flex items-center justify-center w-full sm:w-auto px-6 py-3 rounded-lg bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-colors">
                        <i data-lucide="message-square" class="w-4 h-4 mr-2"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Follow Us Section -->
        <div class="text-center mb-8">
            <h2 class="font-heading text-3xl font-bold text-[var(--color-primary)]">Follow Us</h2>
            <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-secondary)]">
                <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-3.5 h-3.5 fill-current"></i>
                <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @foreach($contact['socials'] as $social)
                <a href="{{ $social['link'] }}" target="_blank" class="bg-white p-6 rounded-xl border border-[var(--color-border)] hover:border-[var(--color-secondary)] transition-all text-center group">
                    <div class="w-12 h-12 mx-auto rounded-full bg-[var(--color-section)] flex items-center justify-center text-[var(--color-primary)] mb-4 group-hover:scale-110 transition-transform">
                        <i data-lucide="{{ $social['icon'] }}" class="w-6 h-6"></i>
                    </div>
                    <h3 class="font-heading text-lg font-bold text-[var(--color-primary)] mb-1">{{ $social['platform'] }}</h3>
                    <p class="text-xs text-[var(--color-body)] mb-4">{{ $social['description'] }}</p>
                    <span class="inline-flex items-center text-xs font-semibold text-[var(--color-primary)] group-hover:text-[var(--color-secondary)]">
                        Explore <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
                    </span>
                </a>
            @endforeach
        </div>

        <!-- Google Maps Embed -->
        <div class="rounded-2xl overflow-hidden border border-[var(--color-border)] shadow-xs h-96">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.215886361848!2d79.0726!3d21.1458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3453023243a75871%3A0x6b80d0d8290f845a!2sNagpur%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                title="Super Frames Location"
            ></iframe>
        </div>

    </div>
</div>
@endsection