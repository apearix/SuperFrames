@extends('layouts.app')

@php
    $about = include resource_path('data/about.php');
@endphp

@section('title', 'About Super Frames | Our Story & Craftsmanship')
@section('meta_description',
    'Learn about Super Frames, founded by Shailendra. Discover our story, values, and 4-step
    process of turning memories into handcrafted art.')

@section('content')
    <div class="bg-[var(--color-background)] py-10 pt-20 space-y-8">
        <section
            class="relative w-full min-h-[350px]  bg-[#FCFAF6] py-12 md:py-16 overflow-hidden border-b border-[var(--color-border)]">

            <!-- RIGHT SIDE DECORATIVE IMAGE -->
            <div
                class="absolute top-0 right-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-right">
                <div class="relative h-full w-full">
                    <!-- Natural Blend Gradient Mask -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#FCFAF6] via-[#FCFAF6]/70 to-transparent z-10 lg:via-[#FCFAF6]/10">
                    </div>
                    <!-- Image Container -->
                    <img src="{{ asset('images/about/frame.png') }}"
                        alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                        class="h-full w-full object-right" />
                </div>
            </div>
            <div
                class="absolute top-0 left-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-left">
                <div class="relative h-full w-full">
                    <!-- Natural Blend Gradient Mask -->
                    <div
                        class="absolute inset-0 bg-gradient-to-l from-[#FCFAF6] via-[#FCFAF6]/70 to-transparent z-10 lg:via-[#FCFAF6]/40">
                    </div>

                    <!-- Image Container -->
                    <img src="{{ asset('images/products/cta-left.png') }}"
                        alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                        class="h-full w-full object-cover object-right-center" />
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="text-center max-w-2xl mx-auto">
                    <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] mb-2">
                        About Super Frames
                    </h1>
                    <div class="flex items-center justify-center gap-3 my-3 text-[var(--color-secondary)]">
                        <span class="h-[2px] w-12 bg-[var(--color-secondary)]/90"></span>
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span class="h-[2px] w-12 bg-[var(--color-secondary)]/90"></span>
                    </div>
                    <p class="mx-auto text-[var(--color-body)] text-sm sm:text-xl max-w-4xl mb-3">
                        Every handcrafted frame is created with passion, creativity, and attention to every little detail,
                        preserving memories that last forever.
                    </p>
                    <!-- Breadcrumbs -->
                    <nav aria-label="Breadcrumb"
                        class="flex items-center justify-center space-x-2 text-sm font-medium text-[#1D356B]">
                        <a href="/" class="hover:opacity-80 transition-opacity">Home</a>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-[#C89A5B]/80 stroke-[2.2]"></i>
                        <span class="font-bold">About Us</span>

                    </nav>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 -mt-16 relative z-20">
            <!-- Creator Spotlight Card -->
            <div
                class="bg-white rounded-3xl border border-[var(--color-border)] shadow-xs overflow-hidden px-8  grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-5 relative flex justify-center">
                    <div>
                        <img src="{{ asset($about['creator']['image']) }}" alt="{{ $about['creator']['name'] }}"
                            class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="lg:col-span-7 pt-4">
                    <span class="text-sm uppercase tracking-widest text-[var(--color-secondary)] font-semibold mb-2 block">
                        MEET THE CREATOR
                    </span>
                    <h2 class="font-heading text-5xl font-bold text-[var(--color-primary)] mb-3">
                        {{ $about['creator']['name'] }}
                    </h2>
                    <div class="flex items-center gap-3 my-3 text-[var(--color-secondary)]">
                        <span class="h-[2px] w-12 bg-[var(--color-secondary)]/30"></span>
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span class="h-[2px] w-12 bg-[var(--color-secondary)]/30"></span>
                    </div>
                    {{-- <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed mb-6">
                        {{ $about['creator']['bio'] }}
                    </p> --}}
                    <div class="text-[var(--color-body)] text-sm sm:text-lg space-y-3 mb-6">
                        <p>
                            Super Frames started with a simple belief that every memory deserves more than just a
                            photograph.
                        </p>

                        <p>
                            What began as a passion for handcrafted art has grown into creating personalized frames that
                            celebrate love, family, friendships, milestones, and life's most meaningful moments.
                        </p>

                        <p>
                            Every frame is carefully designed with creativity, precision, and heartfelt craftsmanship to
                            make
                            each gift truly unforgettable.
                        </p>
                    </div>
                    <div class="font-eyebrow text-2xl text-[var(--color-primary)] mb-8 sm:mb-0">
                        — {{ $about['creator']['signature_text'] }}
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 sm:px-6">


            <!-- Why Choose Super Frames Grid -->
            <div class="mb-8">
                <div class="text-center max-w-xl mx-auto mb-8">
                    <h2 class="font-heading text-3xl sm:text-4xl  text-[var(--color-primary)]">
                        Why Choose Super Frames
                    </h2>
                    <div class="flex items-center justify-center gap-3 my-3 text-[var(--color-secondary)]">
                        <span class="h-[2px] w-12 bg-[var(--color-secondary)]/30"></span>
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span class="h-[2px] w-12 bg-[var(--color-secondary)]/30"></span>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-2">
                    @foreach ($about['values'] as $val)
                        <div
                            class="group bg-white border border-[#F1ECE5] rounded-2xl p-4 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1">

                            <!-- Icon -->
                            <div class="w-20 h-20 mx-auto mb-3 rounded-full bg-[#FCF7F1] flex items-center justify-center">
                                <i data-lucide="{{ $val['icon'] }}"
                                    class="w-10 h-10 text-[var(--color-primary)] stroke-[1.8]"></i>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl  font-bold text-[var(--color-primary)] mb-4">
                                {{ $val['title'] }}
                            </h3>

                            <!-- Description -->
                            <p class="text-[15px] leading-8 text-[var(--color-body)]">
                                {{ $val['description'] }}
                            </p>

                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Our Process -->
            <div class="mb-8">
                <div class="text-center max-w-xl sm:w-full mx-auto mb-6">
                    <h2 class="font-heading text-3xl sm:text-4xl  text-[var(--color-primary)]">
                        Our Process
                    </h2>
                    <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-secondary)]">
                        <span class="h-[1px] w-12 bg-[var(--color-secondary)]/90"></span>
                        <i data-lucide="heart" class="w-5 h-5"></i>
                        <span class="h-[1px] w-12 bg-[var(--color-secondary)]/90"></span>
                    </div>
                </div>

                <div class="relative">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-14">

                        @foreach ($about['process'] as $index => $proc)
                            <div class="relative flex flex-col items-center text-center">
                                {{-- Connector --}}
                                @if (!$loop->last)
                                    <div
                                        class="hidden xl:block absolute top-[70px] left-[72%] w-[calc(100%-70px)] border-t border-dashed border-[var(--color-primary)]/50">
                                        <span
                                            class="absolute left-1/2 -translate-x-1/2 -top-[8px] w-4 h-4 rounded-full bg-[var(--color-primary)] border-4 border-white"></span>
                                    </div>
                                @endif

                                {{-- Image --}}
                                <div class="relative mb-6">

                                    <div
                                        class="w-36 h-36 rounded-full overflow-hidden bg-[#F8F4EF] shadow-sm border border-[#F2ECE6]">

                                        <img src="{{ asset($proc['image']) }}" alt="{{ $proc['title'] }}"
                                            class="w-full h-full object-cover">

                                    </div>

                                    {{-- Step Number --}}
                                    <div
                                        class="absolute -bottom-2 left-0 w-10 h-10 rounded-full bg-[var(--color-primary)] text-white font-bold text-base flex items-center justify-center shadow-md border-4 border-white">
                                        {{ $proc['step'] }}
                                    </div>

                                </div>

                                {{-- Title --}}
                                <h3 class=" text-xl font-bold text-[var(--color-primary)] mb-3 leading-none">
                                    {{ $proc['title'] }}
                                </h3>

                                {{-- Description --}}
                                <p class="max-w-[250px] text-sm  text-[var(--color-body)]">
                                    {{ $proc['description'] }}
                                </p>

                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

            <!-- Bottom CTA Banner -->
            <section class="max-w-7xl mx-auto px-4 sm:px-0 mt-8 relative overflow-hidden">

                <div
                    class=" bg-[#ead5c2] rounded-3xl border border-[var(--color-border)] p-8 md:p-12 text-center relative overflow-hidden shadow-xs">
                    <div
                        class="absolute top-0 right-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-right">
                        <div class="relative h-full w-full">
                            <!-- Natural Blend Gradient Mask -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-[#ead5c2] via-[#ead5c2]/70 to-transparent z-10 lg:via-[#ead5c2]/40">
                            </div>

                            <!-- Image Container -->
                            <img src="{{ asset('images/products/cta-right.png') }}"
                                alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                                class="h-full w-full object-cover object-right-center" />
                        </div>
                    </div>
                    <div
                        class="absolute top-0 left-0 h-full w-full lg:w-1/2 pointer-events-none z-0 opacity-40 sm:opacity-60 lg:opacity-100 animate-fade-left">
                        <div class="relative h-full w-full">
                            <!-- Natural Blend Gradient Mask -->
                            <div
                                class="absolute inset-0 bg-gradient-to-l from-[#ead5c2] via-[#ead5c2]/70 to-transparent z-10 lg:via-[#ead5c2]/40">
                            </div>

                            <!-- Image Container -->
                            <img src="{{ asset('images/products/cta-left.png') }}"
                                alt="Luxury Home Decor with Ceramic Vase, Frame, and Dried Flowers"
                                class="h-full w-full object-cover object-right-center" />
                        </div>
                    </div>
                    <div class="relative z-10">
                        <h2 class="font-serif text-2xl md:text-3xl font-bold text-[var(--color-primary)] mb-2">
                            Let's Turn Your Memories Into Timeless Art
                        </h2>
                        <div class="flex items-center justify-center gap-2 my-2 text-[var(--color-primary)]">
                            <span class="h-[1px] w-12 bg-[var(--color-primary)]/30"></span>
                            <span class="text-[var(--color-primary)]"> <i data-lucide="heart"
                                    class="w-4 h-4 "></i></span>
                            <span class="h-[1px] w-12 bg-[var(--color-primary)]/30"></span>
                        </div>

                        <p class="text-xs md:text-sm text-[var(--color-body)] max-w-xl mx-auto mb-6">
                            Whether it's a birthday, anniversary, wedding, baby, graduation, or family celebration, we're
                            here to
                            create a handcrafted frame that's uniquely yours.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="/best-sellers"
                                class="px-6 py-3 rounded-lg border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm bg-white hover:bg-[var(--color-primary)] hover:text-white transition-colors flex items-center gap-2">
                                <i data-lucide="search" class="w-4 h-4"></i> Browse Collection
                            </a>
                            <a href="https://wa.me/919876543210?text=Hi%20SuperFrames,%20I%20need%20help%20choosing%20the%20perfect%20frame!"
                                target="_blank"
                                class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-[#0c2556] hover:bg-[#12306c] text-white font-semibold text-sm rounded-xl shadow-md transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 512.459"
                                    class="w-4 h-4 text-white" aria-hidden="true">
                                    <path fill="currentColor"
                                        d="M435.689 74.468C387.754 26.471 324 .025 256.071 0 116.098 0 2.18 113.906 2.131 253.916c-.024 44.758 11.677 88.445 33.898 126.946L0 512.459l134.617-35.311c37.087 20.238 78.85 30.891 121.345 30.903h.109c139.949 0 253.88-113.917 253.928-253.928.024-67.855-26.361-131.645-74.31-179.643v-.012zm-179.618 390.7h-.085c-37.868-.011-75.016-10.192-107.428-29.417l-7.707-4.577-79.886 20.953 21.32-77.889-5.017-7.987c-21.125-33.605-32.29-72.447-32.266-112.322.049-116.366 94.729-211.046 211.155-211.046 56.373.025 109.364 22.003 149.214 61.903 39.853 39.888 61.781 92.927 61.757 149.313-.05 116.377-94.728 211.058-211.057 211.058v.011zm115.768-158.067c-6.344-3.178-37.537-18.52-43.358-20.639-5.82-2.119-10.044-3.177-14.27 3.178-4.225 6.357-16.388 20.651-20.09 24.875-3.702 4.238-7.403 4.762-13.747 1.583-6.343-3.178-26.787-9.874-51.029-31.487-18.86-16.827-31.597-37.598-35.297-43.955-3.702-6.355-.39-9.789 2.775-12.943 2.849-2.848 6.344-7.414 9.522-11.116s4.225-6.355 6.343-10.581c2.12-4.238 1.06-7.937-.522-11.117-1.584-3.177-14.271-34.409-19.568-47.108-5.151-12.37-10.385-10.69-14.269-10.897-3.703-.183-7.927-.219-12.164-.219s-11.105 1.582-16.925 7.939c-5.82 6.354-22.209 21.709-22.209 52.927 0 31.22 22.733 61.405 25.911 65.642 3.177 4.237 44.745 68.318 108.389 95.812 15.135 6.538 26.957 10.446 36.175 13.368 15.196 4.834 29.027 4.153 39.96 2.52 12.19-1.825 37.54-15.353 42.824-30.172 5.283-14.818 5.283-27.529 3.701-30.172-1.582-2.641-5.819-4.237-12.163-7.414l.011-.024z" />
                                </svg>
                                <span>Customize on WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
@endsection
