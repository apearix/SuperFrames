@php
    $styles = include resource_path('data/frame-styles.php');
@endphp

<section class="relative py-16 md:py-24 bg-[var(--color-background)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Section Heading -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Crafted for Every Memory ♡
            </span>

            <h2 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Shop by Frame Style
            </h2>

            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>

            <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed">
                Explore our handcrafted frame styles, thoughtfully designed to preserve your most cherished memories
                with elegance and craftsmanship.
            </p>
        </div>

    </div>

    <!-- Full Width Carousel Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper frame-style-swiper overflow-visible py-4">
                <div class="swiper-wrapper">
                    @foreach ($styles as $style)
                        <div class="swiper-slide h-auto">
                            <div
                                class="group relative rounded-3xl overflow-hidden bg-white border border-[var(--color-border)] shadow-xl transition-all duration-500 h-[420px] sm:h-[520px] flex flex-col justify-end">

                                <!-- Background Image -->
                                <img src="{{ asset($style['banner_image'] ?? $style['image']) }}"
                                    alt="{{ $style['title'] }}"
                                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    loading="lazy">

                                <!-- Vignette Gradient Overlay -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent">
                                </div>

                                <!-- Card Content -->
                                <div class="relative z-10 p-6 sm:p-12 text-white flex flex-col items-start">
                                    <h3
                                        class="font-heading text-2xl sm:text-4xl font-bold mb-2 tracking-tight text-white drop-shadow-xs">
                                        {{ $style['title'] }}
                                    </h3>

                                    <p
                                        class="font-eyebrow text-sm sm:text-lg text-[var(--color-secondary)] mb-6 drop-shadow-xs">
                                        {{ $style['eyebrow'] ?? 'Crafted with Love, Made for Memories.' }}
                                    </p>

                                    <a href="/frame-style/{{ $style['slug'] }}"
                                        class="inline-flex items-center gap-2 px-6 py-3 rounded-lg border-2 border-white/90 text-white font-medium text-xs sm:text-sm hover:bg-white hover:text-[var(--color-primary)] transition-all duration-300 shadow-md backdrop-blur-xs">
                                        <span>Explore Collection</span>
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Custom Swiper Navigation Buttons -->
            <button type="button"
                class="frame-prev absolute -left-2 sm:-left-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white text-[var(--color-primary)] border border-[var(--color-border)] flex items-center justify-center shadow-lg hover:bg-[var(--color-primary)] hover:text-white transition-all focus:outline-hidden cursor-pointer"
                aria-label="Previous Slide">
                <i data-lucide="arrow-left" class="w-5 h-5"></i>
            </button>

            <button type="button"
                class="frame-next absolute -right-2 sm:-right-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white text-[var(--color-primary)] border border-[var(--color-border)] flex items-center justify-center shadow-lg hover:bg-[var(--color-primary)] hover:text-white transition-all focus:outline-hidden cursor-pointer"
                aria-label="Next Slide">
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </button>

            <!-- Swiper Pagination -->
            <div class="frame-pagination flex justify-center gap-2.5 mt-8"></div>

        </div>
    </div>
</section>
