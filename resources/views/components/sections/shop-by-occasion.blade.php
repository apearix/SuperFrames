@php
    $occasions = include resource_path('data/occasions.php');
@endphp

<section class="py-16 md:py-24 bg-[var(--color-background)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Gifts for Every Milestone ♡
            </span>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Shop by Occasion
            </h2>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed">
                Find the perfect handcrafted photo frame tailored for anniversaries, birthdays, babies, weddings, and special memories.
            </p>
        </div>

        <!-- Occasions Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            @foreach($occasions as $occ)
                <a 
                    href="/occasion/{{ $occ['slug'] }}" 
                    class="group relative bg-white rounded-2xl border border-[var(--color-border)] overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between"
                >
                    <!-- Card Image Banner -->
                    <div class="relative h-52 overflow-hidden bg-[var(--color-section)]">
                        <img 
                            src="{{ asset($occ['banner_image'] ?? 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?q=80&w=800') }}" 
                            alt="{{ $occ['title'] }}" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <span class="font-eyebrow text-xs text-[var(--color-secondary)] block mb-1">
                                {{ $occ['eyebrow'] ?? 'Made for Memories' }}
                            </span>
                            <h3 class="font-heading text-xl font-bold text-white drop-shadow-xs">
                                {{ $occ['title'] }}
                            </h3>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-5 flex items-center justify-between border-t border-[var(--color-border)]/60 bg-white">
                        <span class="text-xs font-semibold text-[var(--color-primary)] group-hover:text-[var(--color-secondary)] transition-colors">
                            Explore {{ $occ['title'] }}
                        </span>
                        <i data-lucide="arrow-right" class="w-4 h-4 text-[var(--color-primary)] group-hover:translate-x-1 group-hover:text-[var(--color-secondary)] transition-all"></i>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>