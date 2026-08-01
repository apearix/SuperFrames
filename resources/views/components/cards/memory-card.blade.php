@props(['memory'])

<div class="group relative rounded-2xl overflow-hidden border border-[var(--color-border)] bg-white shadow-2xs hover:shadow-lg transition-all duration-300">
    <div class="aspect-4/3 overflow-hidden">
        <img 
            src="{{ asset($memory['image']) }}" 
            alt="{{ $memory['name'] }}" 
            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            loading="lazy"
        >
    </div>

    <!-- Overlay Tag -->
    <div class="absolute bottom-3 left-3 right-3 p-3 rounded-xl bg-black/60 backdrop-blur-md text-white flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full overflow-hidden border-2 border-white shrink-0">
                <img src="{{ asset($memory['avatar']) }}" alt="{{ $memory['name'] }}" class="w-full h-full object-cover">
            </div>
            <div>
                <h3 class="font-heading text-sm font-bold leading-tight">{{ $memory['name'] }}</h3>
                <p class="text-[10px] text-gray-300 uppercase tracking-wider">{{ $memory['occasion'] }}</p>
            </div>
        </div>
        <button type="button" class="text-white/80 hover:text-red-400 transition-colors cursor-pointer" aria-label="Favorite memory">
            <i data-lucide="heart" class="w-4 h-4"></i>
        </button>
    </div>
</div>