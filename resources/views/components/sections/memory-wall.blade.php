@php
    $memories = include resource_path('data/memories.php');
@endphp

<section class="bg-[var(--color-background)] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-0 py-6">
        <!-- Page Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Made with Love ♡
            </span>
            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                Customer Memory Wall
            </h1>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
            <p class="text-[var(--color-body)] text-base">
                Every handcrafted frame tells a unique story. Explore the real memories shared by our happy customers
                across India.
            </p>
        </div>

        <!-- Full Memory Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            @foreach ($memories as $memory)
                <div
                    class="group relative rounded-2xl overflow-hidden border border-[var(--color-border)] bg-white shadow-xs hover:shadow-lg transition-all duration-300">
                    <div class="aspect-4/3 overflow-hidden">
                        <img src="{{ asset($memory['image']) }}" alt="{{ $memory['name'] }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy">
                    </div>

                    <!-- Customer Overlay Badge -->
                    <div
                        class="absolute bottom-3 left-3 right-3 p-3 rounded-xl bg-black/60 backdrop-blur-md text-white flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shrink-0">
                                <img src="{{ asset($memory['avatar']) }}" alt="{{ $memory['name'] }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-heading text-sm font-bold leading-tight">{{ $memory['name'] }}</h3>
                                <p class="text-[10px] text-gray-300 uppercase tracking-wider">{{ $memory['occasion'] }}
                                </p>
                            </div>
                        </div>
                        <button type="button" class="text-white/80 hover:text-red-400 transition-colors"
                            aria-label="Favorite memory">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom CTA Section matching the reference image exactly -->
        <div class="text-center max-w-xl mx-auto ">
            <p class="text-xl font-medium text-[var(--color-body)] mb-4">
                Become Our Next Happy Customer
            </p>

            <a href="/memories"
                class="inline-flex items-center justify-center gap-3 px-8 py-3.5 rounded-full border border-[var(--color-primary)] text-[var(--color-primary)] text-sm font-medium hover:bg-[var(--color-primary)] hover:text-white transition-all shadow-xs group">
                <span>View More Memories</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </div>
</section>
