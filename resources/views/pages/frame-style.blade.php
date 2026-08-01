@extends('layouts.app')

@section('content')
    {{-- Page Banner --}}
    @include('partials.page-banner', [
        'title' => $style['name'] ?? 'Frame Styles',
        'subtitle' => $style['description'] ?? 'Browse our curated collection of custom frame finishes and designs.',
        'breadcrumbs' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Frame Styles', 'url' => '#']
        ]
    ])

    <section class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="container mx-auto px-4">
            
            {{-- Filter and Layout Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                
                {{-- Sidebar Filter --}}
                <div class="lg:col-span-1">
                    <x-forms.filter-form />
                </div>

                {{-- Frames Grid --}}
                <div class="lg:col-span-3">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @forelse($frames ?? [] as $frame)
                            <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm hover:shadow-md transition duration-300 flex flex-col justify-between">
                                <div class="aspect-square bg-gray-100 dark:bg-gray-700 relative overflow-hidden">
                                    <img src="{{ $frame['image'] ?? 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?q=80&w=800' }}" alt="{{ $frame['title'] ?? 'Frame' }}" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                                </div>
                                <div class="p-4 flex flex-col flex-grow justify-between">
                                    <div>
                                        <span class="text-xs font-semibold text-primary uppercase tracking-wider">{{ $frame['material'] ?? 'Wood' }}</span>
                                        <h3 class="font-bold text-gray-900 dark:text-white text-base mt-1">{{ $frame['title'] ?? 'Classic Frame' }}</h3>
                                    </div>
                                    <div class="flex items-center justify-between mt-4">
                                        <span class="text-lg font-extrabold text-gray-900 dark:text-white">₹{{ $frame['price'] ?? '999' }}</span>
                                        <a href="{{ $frame['url'] ?? '#' }}" class="bg-primary hover:bg-primary-dark text-white text-xs font-semibold px-3 py-2 rounded-lg transition">View Details</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            @for($i = 1; $i <= 6; $i++)
                                <div class="bg-white dark:bg-gray-800 rounded-2xl border border-gray-100 dark:border-gray-700 overflow-hidden shadow-sm">
                                    <div class="aspect-square bg-gray-200 dark:bg-gray-700"></div>
                                    <div class="p-4">
                                        <span class="text-xs font-semibold text-primary uppercase tracking-wider">Premium Oak</span>
                                        <h3 class="font-bold text-gray-900 dark:text-white text-base mt-1">Wooden Frame #{{ $i }}</h3>
                                        <div class="flex items-center justify-between mt-4">
                                            <span class="text-lg font-extrabold text-gray-900 dark:text-white">₹1,299</span>
                                            <button class="bg-primary text-white text-xs font-semibold px-3 py-2 rounded-lg">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @endforelse
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection