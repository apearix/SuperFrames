@props([
    'occasions' => []
])

<div class="relative w-full py-4">
    <div class="swiper occasion-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @forelse($occasions as $occasion)
                <div class="swiper-slide">
                    <a href="{{ $occasion['url'] ?? '#' }}" class="group block relative rounded-2xl overflow-hidden aspect-[3/4] shadow-md">
                        <img src="{{ $occasion['image'] ?? asset('images/placeholder.jpg') }}" alt="{{ $occasion['name'] ?? 'Occasion' }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-4">
                            <div>
                                <h3 class="text-white font-bold text-lg">{{ $occasion['name'] ?? 'Occasion' }}</h3>
                                <p class="text-xs text-gray-300 mt-1">Explore Collection &rarr;</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                @php
                    $defaults = ['Wedding', 'Birthday', 'Anniversary', 'Graduation', 'Baby Showcase'];
                @endphp
                @foreach($defaults as $name)
                    <div class="swiper-slide">
                        <div class="group block relative rounded-2xl overflow-hidden aspect-[3/4] bg-gray-800">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-4">
                                <div>
                                    <h3 class="text-white font-bold text-lg">{{ $name }}</h3>
                                    <p class="text-xs text-gray-300 mt-1">Explore Collection &rarr;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</div>