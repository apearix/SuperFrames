@php
    $slides = include resource_path('data/hero.php');
@endphp

<section class="relative bg-[var(--color-background)] overflow-hidden pt-6 pb-16 md:pt-10 md:pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-6 z-10">
                <span class="font-eyebrow text-2xl sm:text-3xl text-[var(--color-primary)] inline-flex items-center gap-2 mb-3">
                    {{ $slides[0]['eyebrow'] }}
                    <i data-lucide="heart" class="w-5 h-5 text-[var(--color-primary)] fill-none"></i>
                </span>

                <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-[var(--color-primary)] leading-tight tracking-tight mb-4">
                    {{ $slides[0]['title'] }}
                </h1>

                <!-- Decorative Heart Line -->
                <div class="flex items-center gap-2 mb-6 text-[var(--color-secondary)]">
                    <span class="h-[1px] w-12 bg-[var(--color-secondary)]/40"></span>
                    <i data-lucide="heart" class="w-3.5 h-3.5 fill-current"></i>
                    <span class="h-[1px] w-24 bg-[var(--color-secondary)]/40"></span>
                </div>

                <p class="text-base sm:text-lg text-[var(--color-body)] leading-relaxed mb-8 max-w-xl">
                    {{ $slides[0]['description'] }}
                </p>

                <!-- Dual Action Buttons -->
                <div class="flex flex-wrap items-center gap-4">
                    <a 
                        href="{{ $slides[0]['primary_cta']['link'] }}" 
                        class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-all shadow-md group"
                    >
                        <span>{{ $slides[0]['primary_cta']['text'] }}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>

                    <a 
                        href="{{ $slides[0]['secondary_cta']['link'] }}" 
                        target="_blank"
                        rel="noopener"
                        class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg bg-white border border-[var(--color-primary)] text-[var(--color-primary)] font-medium text-sm hover:bg-[var(--color-primary)] hover:text-white transition-all shadow-xs"
                    >
                        <span>{{ $slides[0]['secondary_cta']['text'] }}</span>
                        <i data-lucide="message-circle" class="w-4 h-4 text-[#25D366]"></i>
                    </a>
                </div>
            </div>

            <!-- Right Hero Image Showcase -->
            <div class="lg:col-span-6 relative">
                <div class="relative mx-auto max-w-lg lg:max-w-none rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                    <img 
                        src="{{ asset($slides[0]['image']) }}" 
                        alt="{{ $slides[0]['title'] }}" 
                        class="w-full h-auto object-cover rounded-xl"
                    >
                </div>
            </div>

        </div>

    </div>
</section>