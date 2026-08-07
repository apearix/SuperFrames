@php
    $blogs = include resource_path('data/blogs.php');
@endphp

<section class="relative py-16 md:py-24 bg-[var(--color-section)] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Section Heading -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Creative Inspiration ♡
            </span>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Latest Blogs
            </h2>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-base">
                Discover creative ideas, gifting inspiration, and thoughtful ways to preserve life's most cherished
                memories.
            </p>
        </div>

    </div>

    <!-- Full Width Carousel Area -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative">
        <div class="relative">

            <!-- Previous Button -->
            <button type="button"
                class="blog-prev absolute -left-2 sm:-left-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white text-[var(--color-primary)] border border-[var(--color-border)] flex items-center justify-center shadow-lg hover:bg-[var(--color-primary)] hover:text-white transition-all focus:outline-hidden cursor-pointer"
                aria-label="Previous Slide">
                <i data-lucide="arrow-left" class="w-5 h-5"></i>
            </button>

            <!-- Swiper Container -->
            <div class="swiper latest-blog-swiper overflow-visible py-8">
                <div class="swiper-wrapper items-center">
                    @foreach ($blogs as $blog)
                        <div class="swiper-slide h-auto">
                            <!-- Inner Wrapper Card for Scaling Effect -->
                            <a href="{{ $blog['link'] ?? '#' }}"
                                class="blog-card group relative block rounded-3xl overflow-hidden h-[480px] sm:h-[540px] shadow-xl">

                                <!-- Background Image -->
                                <img src="{{ asset($blog['image']) }}" alt="{{ $blog['title'] }}"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                    loading="lazy">

                                <!-- Vignette Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent">
                                </div>

                                <!-- Card Content -->
                                <div
                                    class="absolute bottom-0 left-0 right-0 p-6 sm:p-10 text-white flex flex-col items-start">
                                    <h3
                                        class="font-heading text-2xl sm:text-3xl font-bold mb-3 tracking-tight text-white drop-shadow-xs">
                                        {{ $blog['title'] }}
                                    </h3>

                                    <p class="text-xs sm:text-sm text-white/85 mb-6 line-clamp-2 leading-relaxed">
                                        {{ $blog['excerpt'] }}
                                    </p>

                                    <span
                                        class="inline-flex items-center gap-2 border-b border-white pb-1 text-sm sm:text-base font-medium group-hover:text-[var(--color-secondary)] transition-colors">
                                        <span>Read More</span>
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </span>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Next Button -->
            <button type="button"
                class="blog-next absolute -right-2 sm:-right-6 top-1/2 -translate-y-1/2 z-30 w-12 h-12 rounded-full bg-white text-[var(--color-primary)] border border-[var(--color-border)] flex items-center justify-center shadow-lg hover:bg-[var(--color-primary)] hover:text-white transition-all focus:outline-hidden cursor-pointer"
                aria-label="Next Slide">
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </button>

            <!-- Swiper Pagination -->
            <div class="blog-pagination flex justify-center gap-2.5 mt-8"></div>

        </div>
    </div>

    <!-- Bottom CTA -->
    <div class="text-center mt-12 max-w-7xl mx-auto px-4 sm:px-6">
        <a href="/blog"
            class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-primary)] hover:text-white transition-all duration-300 shadow-xs group">
            <span>View All Blogs</span>
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform fill-none stroke-current"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>

</section>
