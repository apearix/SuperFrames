@props([
    'title' => 'Our Frame Gallery',
    'subtitle' => 'Explore some of our finest frame collections and custom setups.',
    'images' => [] // Expects array of ['url' => '...', 'alt' => '...', 'title' => '...']
])

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
                            src="{{ $image['url'] ?? asset('images/placeholder.jpg') }}" 
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
                {{-- Fallback Mock Images --}}
                @for($i = 1; $i <= 8; $i++)
                    <div class="group relative overflow-hidden rounded-xl bg-white dark:bg-gray-800 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="aspect-square w-full overflow-hidden bg-gray-200 dark:bg-gray-700">
                            <img 
                                src="https://picsum.photos/500/500?random={{ $i }}" 
                                alt="Frame Showcase {{ $i }}" 
                                class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110"
                                loading="lazy"
                            >
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                            <p class="text-sm font-medium text-white">Custom Wooden Frame #{{ $i }}</p>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>

    </div>
</section>