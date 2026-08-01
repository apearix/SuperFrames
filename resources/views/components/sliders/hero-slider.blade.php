@props([
    'slides' => []
])

<div class="relative w-full overflow-hidden rounded-3xl">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            @forelse($slides as $slide)
                <div class="swiper-slide relative bg-gray-900 text-white min-h-[420px] md:min-h-[520px] flex items-center">
                    <img src="{{ $slide['image'] ?? asset('images/hero-bg.jpg') }}" alt="{{ $slide['title'] ?? 'Hero' }}" class="absolute inset-0 w-full h-full object-cover opacity-60">
                    <div class="relative z-10 max-w-2xl px-8 md:px-16 py-12">
                        @if(isset($slide['badge']))
                            <span class="bg-primary text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">{{ $slide['badge'] }}</span>
                        @endif
                        <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-4">{{ $slide['title'] ?? 'Preserve Your Best Memories' }}</h1>
                        <p class="text-base md:text-lg text-gray-200 mb-6">{{ $slide['subtitle'] ?? 'High quality custom photo frames crafted with precision.' }}</p>
                        @if(isset($slide['button_text']))
                            <a href="{{ $slide['button_url'] ?? '#' }}" class="bg-primary hover:bg-primary-dark text-white font-bold px-6 py-3 rounded-xl transition inline-block">
                                {{ $slide['button_text'] }}
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                <div class="swiper-slide relative bg-gray-900 text-white min-h-[420px] md:min-h-[520px] flex items-center">
                    <div class="relative z-10 max-w-2xl px-8 md:px-16 py-12">
                        <span class="bg-blue-600 text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">SuperFrames Special</span>
                        <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-4">Turn Moments Into Custom Frames</h1>
                        <p class="text-base md:text-lg text-gray-200 mb-6">Explore our widest collection of premium wooden and acrylic frames.</p>
                        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 py-3 rounded-xl transition inline-block">Shop Now</a>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>