@extends('layouts.app')

@section('title', 'Contact Us | Super Frames')

@section('content')
    <div class="space-y-6">
        <section
            class="relative w-full min-h-[350px] lg:h-[350px] bg-[#FCFAF6] overflow-hidden flex flex-col justify-between">

            <!-- BACKGROUND LAYERS -->
            <!-- Layer 2 & Left Gradient Effect: Glow effect on left viewport -->
            <div class="absolute -top-32 -left-48 w-[650px] h-[650px] sm:w-[850px] sm:h-[850px] rounded-full pointer-events-none z-0 blur-3xl opacity-80"
                style="background: radial-gradient(circle, rgba(255,255,255,0.95) 0%, rgba(249,241,229,0.85) 50%, rgba(252,250,246,0) 80%);">
            </div>

            <div class="absolute top-1/2 -left-20 -translate-y-1/2 w-[500px] h-[500px] rounded-full pointer-events-none z-0 blur-2xl opacity-60"
                style="background: radial-gradient(circle, rgba(249,241,229,0.9) 0%, transparent 70%);"></div>

            <!-- Layer 3: Vignette & Soft Tint Overlay -->
            <div
                class="absolute inset-0 bg-radial from-transparent via-transparent to-[#1D356B]/[0.02] pointer-events-none z-0">
            </div>
            <!-- Layer 4: Subtle Soft Vignette Overlay -->
            <div class="absolute inset-0 backdrop-blur-[0.5px] pointer-events-none z-0"></div>

            <!-- RIGHT SIDE DECORATIVE IMAGE -->
            <div
                class="absolute top-0 right-0 h-full w-full lg:w-[42%] pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-right">
                <div class="relative h-full w-full">
                    <!-- Natural Blend Gradient Mask -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#FCFAF6] via-[#FCFAF6]/70 to-transparent z-10 lg:via-[#FCFAF6]/40">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-b from-[#FCFAF6]/80 via-transparent to-[#FCFAF6] z-10">
                    </div>

                    <!-- Image Container -->
                    <img src="https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?q=80&w=1200&auto=format&fit=crop"
                        alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                        class="h-full w-full object-cover object-right-center" />
                </div>
            </div>

            <!-- MAIN CONTAINER -->
            <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full py-6 flex-1 flex flex-col justify-between">

                <!-- Top Bar: Breadcrumb -->
                <nav aria-label="Breadcrumb" class="flex items-center space-x-2 text-sm font-medium text-[#1D356B]">
                    <a href="/" class="hover:opacity-80 transition-opacity">Home</a>
                    <i data-lucide="chevron-right" class="w-4 h-4 text-[#C89A5B]/80 stroke-[2.2]"></i>
                    <span class="font-bold">Contact Us</span>
                </nav>

                <!-- Center Hero Content -->
                <div class="my-auto text-center max-w-3xl mx-auto animate-fade-up">
                    <!-- Main Heading -->
                    <h1 class="text-4xl sm:text-5xl text-primary">
                        Contact Us
                    </h1>
                    <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                        <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                        <i data-lucide="heart" class="w-4 h-4"></i>
                        <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                    </div>
                    <p class="text-[var(--color-body)] text-sm sm:text-xl">
                        Have a question or planning a personalized frame?<br>
                        We'd love to help you create something truly memorable.
                    </p>

                </div>

                <!-- Placeholder space for aligning overlapping cards -->
                <div class="h-12 lg:h-16"></div>
            </div>
        </section>

        <!-- LUXURY CONTACT CARDS SECTION (Overlapping Hero) -->
        <section
            class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 -mt-20 lg:-mt-24  pointer-events-auto animate-fade-up-delayed">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- CARD 1: Business Address -->
                <div
                    class="relative bg-white rounded-xl p-6 min-h-[200px] border border-slate-100 shadow-sm flex flex-col justify-between overflow-hidden transition-all duration-300 hover:shadow-xl">

                    <!-- Top Section: Icon + Title + Address -->
                    <div class="relative z-10 flex flex-col sm:flex-row items-start gap-6">
                        <div class="shrink-0">
                            <!-- Outer Gold Ring -->
                            <div
                                class="w-[78px] h-[78px] rounded-full bg-[#D6A15D] p-[2px] shadow-[0_8px_25px_rgba(0,0,0,0.08)]">

                                <!-- White Ring -->
                                <div class="w-full h-full rounded-full bg-white p-[2px]">

                                    <!-- Blue Circle -->
                                    <div class="w-full h-full rounded-full bg-[#0F2E67] flex items-center justify-center">

                                        <i data-lucide="map-pinned" class="w-8 h-8 text-white stroke-[2.1]">
                                        </i>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1">
                            <h2 class="text-3xl text-[#1D356B] leading-none mb-3">
                                Business Address
                            </h2>
                            <address class="not-italic text-xl mb-2">
                                <p class="font-medium text-[#1D356B]">Super Frames</p>
                                <p>Shop No. 12, Shreeji Complex</p>
                                <p>Station Road, Civil Lines</p>
                                <p>Nagpur - 440001, Maharashtra, India</p>
                            </address>

                            <!-- Bottom Left: Get Directions Link -->
                            <div class="relative z-10 flex items-center pt-2">
                                <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 text-xl  text-[#C89A5B] hover:underline transition-all group">
                                    <i data-lucide="map" class="w-4 h-4 text-[#C89A5B]"></i>
                                    <span>Get Directions</span>
                                </a>
                            </div>

                            <!-- Bottom Right Decoration: Architectural Building Illustration (8% Opacity) -->
                            <div
                                class="absolute bottom-0 right-0 pointer-events-none opacity-[0.08] text-[#1D356B] translate-x-3 translate-y-3 z-0">
                                <svg width="180" height="180" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <!-- Architectural facade sketch -->
                                    <rect x="4" y="2" width="16" height="20" rx="2" />
                                    <path d="M9 22v-4h6v4" />
                                    <path
                                        d="M8 6h2v2H8zM14 6h2v2h-2zM8 11h2v2H8zM14 11h2v2h-2zM8 16h2v2H8zM14 16h2v2h-2z" />
                                    <path d="M2 22h20" />
                                </svg>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- CARD 2: WhatsApp -->
                <div
                    class="relative bg-white rounded-xl p-6 min-h-[200px] border border-slate-100 shadow-sm flex flex-col justify-between overflow-hidden transition-all duration-300 hover:shadow-xl">

                    <!-- Top Section: Icon + Title + Number + Details -->
                    <div class="relative z-10 flex flex-col sm:flex-row items-start gap-6">
                        <div class="shrink-0">
                            <!-- Outer Gold Ring -->
                            <div
                                class="w-[78px] h-[78px] rounded-full bg-[#D6A15D] p-[2px] shadow-[0_8px_25px_rgba(0,0,0,0.08)]">

                                <!-- White Ring -->
                                <div class="w-full h-full rounded-full bg-white p-[2px]">

                                    <!-- Blue Circle -->
                                    <div class="w-full h-full rounded-full bg-[#0F2E67] flex items-center justify-center">

                                        <i data-lucide="message-circle-more" class="w-8 h-8 text-white stroke-[2.1]">
                                        </i>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Content -->
                        <div class="flex-1">
                            <h2 class="text-3xl text-[#1D356B] leading-none pb-4">
                                WhatsApp
                            </h2>

                            <p class="text-2xl font-semibold mb-2">
                                +91 98765 43210
                            </p>

                            <p class="text-[#4B5563] text-xl mb-2">
                                Available for custom orders<br />and inquiries.
                            </p>
                            <div class="relative z-10 mt-4">
                                <a href="https://wa.me/919876543210" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center justify-center gap-[10px] h-[50px] px-[28px] bg-[#143B7A] hover:bg-[#0F2F64] text-white font-['Roboto',sans-serif] text-[16px] font-medium rounded-[10px] shadow-sm transition-colors duration-200">
                                    <i data-lucide="message-circle-more" class="w-[20px] h-[20px] text-white"></i>
                                    <span>Chat on WhatsApp</span>
                                </a>
                            </div>
                            <!-- Bottom Right Decoration: Phone Illustration (-15deg Rotate, 8% Opacity) -->
                            <div
                                class="absolute bottom-1 right-2 pointer-events-none opacity-[0.08] text-[#1D356B] -rotate-15 z-0">
                                <svg width="170" height="170" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <!-- Smartphone outline sketch -->
                                    <rect x="5" y="2" width="14" height="20" rx="3" />
                                    <path d="M12 18h.01" />
                                    <path d="M8 5h8" />
                                </svg>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 pt-6 space-y-6">

            @php
                $contact = include resource_path('data/contact.php');
            @endphp


            <!-- Follow Us Section -->
            <div class="text-center mb-6">
                <h2 class="text-3xl text-primary">Follow Us</h2>
                <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                    <i data-lucide="heart" class="w-3.5 h-3.5"></i>
                    <span class="h-[1px] w-8 bg-[var(--color-secondary)]/30"></span>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($contact['socials'] as $social)
                    <a href="{{ $social['link'] }}" target="_blank"
                        class="bg-white p-5 rounded-2xl shadow-sm hover:shadow-md border border-gray-100 transition-all text-center flex flex-col items-center justify-between group relative min-h-[200px]">

                        <!-- Circular Icon Container -->
                        <div class="w-20 h-20 rounded-full flex items-center justify-center mb-2 transition-transform group-hover:scale-110"
                            style="background-color: {{ $social['bg_color'] }};">
                            {!! $social['svg'] !!}
                        </div>

                        <!-- Platform & Description -->
                        <div class="flex-grow flex flex-col justify-center mb-2">
                            <h3 class="text-xl font-bold text-primary mb-2">
                                {{ $social['platform'] }}
                            </h3>
                            <p class="text-sm text-gray-500 leading-relaxed mx-auto">
                                {{ $social['description'] }}
                            </p>
                        </div>

                        <!-- Bottom Right Arrow -->
                        <div class="w-full flex justify-end">
                            <svg class="w-5 h-5 text-[#1b2b48] transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Google Maps Embed -->
            <div class="rounded-2xl overflow-hidden border border-[var(--color-border)] shadow-xs h-96 mb-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.707010758721!2d79.55793637474366!3d22.09900355016263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2aa54b3a78d185%3A0x4de946af07534fae!2sSuper%20Frames!5e0!3m2!1sen!2sin!4v1785666559275!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    title="Super Frames Location"></iframe>
            </div>

        </div>
    </div>
@endsection
