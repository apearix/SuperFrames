@php
    $slides = include resource_path('data/hero.php');
@endphp

<section class="relative w-full mt-20 overflow-hidden min-h-[calc(100vh-15rem)] lg:h-screen flex items-center justify-center py-12 lg:py-0">

    <div class="absolute inset-0 -z-10">
        <img src="{{ asset('/images/hero/banner-lg.png') }}" alt=""
            class="w-full h-full object-cover object-center object-bottom">
        <div class="absolute inset-0 bg-white/10"></div> {{-- optional overlay --}}
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full">
        <div class="swiper hero-swiper relative overflow-hidden">
            <div class="swiper-wrapper lg:py-7">
                @foreach ($slides as $slide)
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

                            <!-- Left Hero Content -->
                            <div class="lg:col-span-6 z-10 text-center md:text-left mx-auto lg:mx-0 max-w-xl lg:max-w-none">
                                <span
                                    class="font-eyebrow text-xl sm:text-2xl lg:text-3xl text-[var(--color-primary)] inline-flex items-center justify-center lg:justify-start gap-2 mb-2 sm:mb-3">
                                    {{ $slide['eyebrow'] }}
                                    <i data-lucide="heart" class="w-4 h-4 sm:w-5 sm:h-5 text-[var(--color-primary)] fill-none"></i>
                                </span>

                                <h1
                                    class="font-heading text-3xl sm:text-4xl lg:text-6xl font-bold text-[var(--color-primary)] leading-tight tracking-tight mb-3 sm:mb-4">
                                    {{ $slide['title'] }}
                                </h1>

                                <!-- Decorative Heart Line -->
                                <div class="flex items-center justify-center lg:justify-start gap-2 mb-4 sm:mb-6 text-[var(--color-secondary)]">
                                    <span class="h-[1px] w-10 lg:w-12 bg-[var(--color-secondary)]/40"></span>
                                    <i data-lucide="heart" class="w-3 h-3 lg:w-3.5 lg:h-3.5"></i>
                                    <span class="h-[1px] w-20 lg:w-24 bg-[var(--color-secondary)]/40"></span>
                                </div>

                                <p class="text-sm sm:text-base lg:text-lg text-[var(--color-body)] leading-relaxed mb-6 sm:mb-8">
                                    {{ $slide['description'] }}
                                </p>

                                <!-- Dual Action Buttons -->
                                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3 sm:gap-4">
                                    <a href="{{ $slide['primary_cta']['link'] }}"
                                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 sm:px-7 py-3 sm:py-3.5 rounded-lg bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-all shadow-md group">
                                        <span>{{ $slide['primary_cta']['text'] }}</span>
                                        <i data-lucide="arrow-right"
                                            class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                                    </a>

                                    <a href="{{ $slide['secondary_cta']['link'] }}" target="_blank" rel="noopener"
                                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 sm:px-7 py-3 sm:py-3.5 rounded-lg bg-white border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-primary)] hover:text-white transition-all shadow-xs">
                                        <span>{{ $slide['secondary_cta']['text'] }}</span>
                                        <i data-lucide="message-circle" class="w-4 h-4 text-[#25D366]"></i>
                                    </a>
                                </div>
                            </div>

                            {{-- Optional Right Hero Image Showcase (Commented out as in your desktop version) --}}

                        </div>
                    </div>
                @endforeach
            </div>
            
            <div
                class="hero-swiper-pagination swiper-pagination !relative !mt-6 lg:!mt-8 flex justify-center items-center gap-2">
            </div>
        </div>
    </div>
</section>