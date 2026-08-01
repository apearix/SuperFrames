@php
    $blogs = include resource_path('data/blogs.php');
@endphp

<section class="py-16 md:py-24 bg-[var(--color-section)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
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
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-base">
                Discover creative ideas, gifting inspiration, and thoughtful ways to preserve life's most cherished memories.
            </p>
        </div>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($blogs as $blog)
                <div class="group relative rounded-2xl overflow-hidden bg-black aspect-4/5 shadow-md flex flex-col justify-end p-6">
                    <img 
                        src="{{ asset($blog['image']) }}" 
                        alt="{{ $blog['title'] }}" 
                        class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>

                    <div class="relative z-10 text-white">
                        <h3 class="font-heading text-2xl font-bold mb-2">{{ $blog['title'] }}</h3>
                        <p class="text-xs text-gray-300 leading-relaxed mb-4 line-clamp-2">{{ $blog['excerpt'] }}</p>
                        <a 
                            href="{{ $blog['link'] }}" 
                            class="inline-flex items-center gap-1.5 text-xs font-semibold text-white group-hover:text-[var(--color-secondary)] transition-colors"
                        >
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-12">
            <a 
                href="/blog" 
                class="inline-flex items-center gap-2 px-8 py-3 rounded-md border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-primary)] hover:text-white transition-all duration-300"
            >
                <span>View All Blogs</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </div>
</section>