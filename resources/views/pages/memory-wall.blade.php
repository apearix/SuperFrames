@extends('layouts.app')

@section('content')
    {{-- Page Banner --}}
    @include('partials.page-banner', [
        'title' => 'Memory Wall',
        'subtitle' => 'Explore inspiring photo wall setups created by our community.',
        'breadcrumbs' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Memory Wall', 'url' => '#']
        ]
    ])

    {{-- Main Memory Wall Section --}}
    <x-sections.memory-wall :memories="$memories ?? []" />

    {{-- Interactive Call to Action Section --}}
    <section class="py-12 bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
        <div class="container mx-auto px-4 text-center max-w-2xl">
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                Want to Featured Your Memory Wall?
            </h3>
            <p class="text-sm text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                Tag us in your photo frame setup on Instagram or submit your custom frame photos to get featured on our Wall of Fame!
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center bg-primary hover:bg-primary-dark text-white font-semibold px-6 py-3 rounded-xl transition shadow-md">
                Share Your Setup
            </a>
        </div>
    </section>
@endsection