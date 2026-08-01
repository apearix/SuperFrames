@props([
    'title' => 'Our Frame Gallery',
    'subtitle' => 'Explore some of our finest frame collections and custom setups.',
    'images' => [] // Expects array of ['url' => '...', 'alt' => '...', 'title' => '...']
])

@php
    $unsplashMockImages = [
        'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?q=80&w=600',
        'https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?q=80&w=600',
        'https://images.unsplash.com/photo-1530103862676-de8c9debad1d?q=80&w=600',
        'https://images.unsplash.com/photo-1518895949257-7621c3c786d7?q=80&w=600',
        'https://images.unsplash.com/photo-1519689680058-324335c77eba?q=80&w=600',
        'https://images.unsplash.com/photo-1543466835-00a7907e9de1?q=80&w=600',
        'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=600',
        'https://images.unsplash.com/photo-1522673607200-164d1b6ce486?q=80&w=600',
    ];
@endphp

<section class="py-12 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4">
        
        {{-- Section Heading Component --}}
        <x-sections.section-heading 
            badge="Portfolio"
            :title="$title" 
            :subtitle="$subtitle"
        />

        {{-- Gallery Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($images as $image)
                <div class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                    <div class="aspect-square w-full overflow-hidden bg-gray-200 dark:bg-gray-700">
                        <img 
                            src="{{ $image['url'] ?? 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?q=80&w=600' }}" 
                            alt="{{ $image['alt'] ?? 'Gallery Image' }}" 
                            class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110"
                            loading="lazy"
                        >
                    </div>
                    @if(isset($image['title']))
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-sm font-medium text-white">{{ $image['title'] }}</p>
                        </div>
                    @endif
                </div>
            @empty
                {{-- Fallback Unsplash Images --}}
                @foreach($unsplashMockImages as $index => $url)
                    <div class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="aspect-square w-full overflow-hidden bg-gray-200 dark:bg-gray-700">
                            <img 
                                src="{{ $url }}" 
                                alt="Frame Showcase {{ $index + 1 }}" 
                                class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110"
                                loading="lazy"
                            >
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-sm font-medium text-white">Custom Handcrafted Frame #{{ $index + 1 }}</p>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>

    </div>
</section>