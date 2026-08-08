@props([
    'items' => [],
])

<div class="relative w-full py-4">
    <div class="swiper gallery-swiper overflow-hidden">
        <div class="swiper-wrapper">
            {{-- @forelse($items as $item)
                <div class="swiper-slide">
                    <div
                        class="aspect-square overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800 shadow-sm relative group">
                        <img src="{{ $item['image'] ?? 'https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?q=80&w=800' }}"
                            alt="{{ $item['caption'] ?? 'Gallery' }}"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <div
                            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                            <span class="text-white text-sm font-medium">{{ $item['caption'] ?? '' }}</span>
                        </div>
                    </div>
                </div>
            @empty
                @for ($i = 1; $i <= 6; $i++)
                    <div class="swiper-slide">
                        <div class="aspect-square overflow-hidden rounded-2xl bg-gray-200 dark:bg-gray-700"></div>
                    </div>
                @endfor
            @endforelse --}}
            @forelse($items as $item)
                <div class="swiper-slide">
                    <div
                        class="aspect-square overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-800 shadow-sm relative group">

                        <a href="{{ $item['image'] ?? 'https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?q=80&w=1200' }}"
                            class="glightbox block w-full h-full" data-type="image" data-gallery="gallery">
                            <img src="{{ $item['image'] ?? 'https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?q=80&w=800' }}"
                                alt="{{ $item['caption'] ?? 'Gallery' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                            <div
                                class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4 pointer-events-none">
                                <span class="text-white text-sm font-medium">
                                    {{ $item['caption'] ?? '' }}
                                </span>
                            </div>
                        </a>

                    </div>
                </div>
            @empty
        </div>
    </div>
</div>
