@php
    $occasions = include resource_path('data/occasions.php');
@endphp

<section class="py-16 md:py-24 bg-[var(--color-background)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Find the Perfect Frame ♡
            </span>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Shop by Occasion
            </h2>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed">
                Discover handcrafted photo frames thoughtfully designed to celebrate every special milestone in life.
            </p>
        </div>

        <!-- Slider Wrapper with Navigation Arrows -->
        <div class="relative px-2 sm:px-12">

            <!-- Previous Button -->
            <button type="button"
                class="occasion-prev absolute left-0 top-[38%] -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white text-[var(--color-primary)] shadow-md border border-[var(--color-border)] flex items-center justify-center hover:bg-[var(--color-primary)] hover:text-white transition-all cursor-pointer">
                <i data-lucide="arrow-left" class="w-5 h-5"></i>
            </button>

            <!-- Swiper Container -->
            <div class="swiper occasion-swiper overflow-hidden py-4">
                <div class="swiper-wrapper">
                    @foreach ($occasions as $occ)
                        <div class="swiper-slide !w-auto flex justify-center">
                            <a href="/occasion/{{ $occ['slug'] }}"
                                class="group flex flex-col items-center text-center">

                                <!-- Fixed Uniform Size Circular Card -->
                                <div
                                    class="relative w-36 h-36 sm:w-40 sm:h-40 shrink-0 rounded-full overflow-hidden bg-white p-1 shadow-md border-2 border-white group-[.swiper-slide-active]:border-[var(--color-primary)] transition-all duration-300">
                                    <img src="{{ asset($occ['banner_image']) }}" alt="{{ $occ['title'] }}"
                                        class="w-full h-full object-cover rounded-full group-hover:scale-105 transition duration-500">
                                </div>

                                <!-- Title and Icon -->
                                <div class="mt-4 flex items-center justify-center gap-2">
                                    <span
                                        class="font-medium text-sm sm:text-base text-[var(--color-primary)] group-hover:text-[var(--color-secondary)] transition-colors">
                                        {{ $occ['title'] }}
                                    </span>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Next Button -->
            <button type="button"
                class="occasion-next absolute right-0 top-[38%] -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white text-[var(--color-primary)] shadow-md border border-[var(--color-border)] flex items-center justify-center hover:bg-[var(--color-primary)] hover:text-white transition-all cursor-pointer">
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </button>

            <!-- Swiper Pagination -->
            <div class="occasion-pagination swiper-pagination !relative !mt-8 flex justify-center items-center gap-2">
            </div>

        </div>

    </div>
</section>
