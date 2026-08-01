@props([
    'products' => []
])

<div class="relative w-full py-4">
    <div class="swiper product-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @forelse($products as $product)
                <div class="swiper-slide">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                        <div class="aspect-square bg-gray-50 dark:bg-gray-900 relative overflow-hidden">
                            <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1518895949257-7621c3c786d7?q=80&w=800' }}" alt="{{ $product['title'] ?? 'Product' }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-900 dark:text-white text-base line-clamp-1">{{ $product['title'] ?? 'Custom Frame' }}</h3>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-lg font-extrabold text-gray-900 dark:text-white">₹{{ $product['price'] ?? '999' }}</span>
                                <a href="{{ $product['url'] ?? '#' }}" class="bg-primary hover:bg-primary-dark text-white text-xs font-semibold px-3 py-2 rounded-lg transition">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                @for($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm">
                            <div class="aspect-square bg-gray-200 dark:bg-gray-700"></div>
                            <div class="p-4">
                                <h3 class="font-bold text-gray-900 dark:text-white text-base">Premium Oak Frame</h3>
                                <div class="flex items-center justify-between mt-3">
                                    <span class="text-lg font-extrabold text-gray-900 dark:text-white">₹1,299</span>
                                    <button class="bg-primary text-white text-xs font-semibold px-3 py-2 rounded-lg">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>
    </div>
</div>