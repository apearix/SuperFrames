@props([
    'frames' => []
])

<div class="relative w-full py-4">
    <div class="swiper frame-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @forelse($frames as $frame)
                <div class="swiper-slide">
                    <div class="group relative bg-white dark:bg-gray-800 p-4 rounded-xl border border-gray-100 dark:border-gray-700 text-center shadow-sm">
                        <div class="aspect-square bg-gray-50 dark:bg-gray-900 rounded-lg overflow-hidden mb-3 flex items-center justify-center p-4">
                            <img src="{{ $frame['image'] ?? 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?q=80&w=800' }}" alt="{{ $frame['name'] ?? 'Frame' }}" class="max-h-full max-w-full object-contain group-hover:scale-105 transition duration-300">
                        </div>
                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">{{ $frame['name'] ?? 'Frame Style' }}</h4>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $frame['material'] ?? 'Wooden' }}</p>
                    </div>
                </div>
            @empty
                @for($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide">
                        <div class="group relative bg-white dark:bg-gray-800 p-4 rounded-xl border border-gray-100 dark:border-gray-700 text-center shadow-sm">
                            <div class="aspect-square bg-gray-100 dark:bg-gray-700 rounded-lg mb-3"></div>
                            <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Classic Black Frame</h4>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Matte Finish</p>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>
    </div>
</div>