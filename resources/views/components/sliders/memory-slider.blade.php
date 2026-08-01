@props([
    'memories' => []
])

<div class="relative w-full py-4">
    <div class="swiper memory-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @forelse($memories as $memory)
                <div class="swiper-slide">
                    <div class="bg-white dark:bg-gray-800 p-3 rounded-2xl border border-gray-100 dark:border-gray-700 shadow-sm text-center">
                        <div class="aspect-[4/5] rounded-xl overflow-hidden mb-3 bg-gray-100">
                            <img src="{{ $memory['image'] ?? asset('images/placeholder.jpg') }}" alt="{{ $memory['title'] ?? 'Memory' }}" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 dark:text-gray-100 text-sm">{{ $memory['title'] ?? 'Wall of Memories' }}</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">{{ $memory['date'] ?? '' }}</p>
                    </div>
                </div>
            @empty
                @for($i = 1; $i <= 5; $i++)
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-800 p-3 rounded-2xl border border-gray-100 dark:border-gray-700 text-center">
                            <div class="aspect-[4/5] rounded-xl bg-gray-200 dark:bg-gray-700 mb-3"></div>
                            <h4 class="font-bold text-gray-800 dark:text-gray-100 text-sm">Family Vacation #{{ $i }}</h4>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Custom Canvas</p>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>
    </div>
</div>