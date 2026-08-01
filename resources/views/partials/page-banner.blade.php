@props([
    'title' => 'Page Title',
    'subtitle' => null,
    'breadcrumbs' => [],
    'bgImage' => null
])

<section class="relative py-12 md:py-20 bg-gray-900 text-white overflow-hidden">
    <!-- Background Image / Overlay -->
    <div class="absolute inset-0 z-0">
        @if($bgImage)
            <img src="{{ $bgImage }}" alt="{{ $title }}" class="w-full h-full object-cover opacity-30">
        @else
            <div class="w-full h-full bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 opacity-90"></div>
        @endif
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center max-w-4xl">
        <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-3">
            {{ $title }}
        </h1>

        @if($subtitle)
            <p class="text-base md:text-lg text-gray-300 max-w-2xl mx-auto mb-6">
                {{ $subtitle }}
            </p>
        @endif

        @if(!empty($breadcrumbs))
            <div class="inline-block mt-2">
                @include('partials.breadcrumbs', ['items' => $breadcrumbs])
            </div>
        @endif
    </div>
</section>