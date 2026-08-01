@extends('layouts.app')

@section('content')
    {{-- Page Banner --}}
    @include('partials.page-banner', [
        'title' => $memory['title'] ?? 'Memory Details',
        'subtitle' => 'A closer look at this custom memory frame layout.',
        'breadcrumbs' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Memories', 'url' => '#'],
            ['label' => $memory['title'] ?? 'Detail', 'url' => '#']
        ]
    ])

    <section class="py-12 bg-white dark:bg-gray-900">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                
                {{-- Memory Preview Image --}}
                <div class="rounded-3xl overflow-hidden bg-gray-100 dark:bg-gray-800 shadow-xl border border-gray-100 dark:border-gray-700">
                    <img src="{{ $memory['image'] ?? asset('images/placeholder.jpg') }}" alt="{{ $memory['title'] ?? 'Memory Showcase' }}" class="w-full h-auto object-cover">
                </div>

                {{-- Memory Details & Info --}}
                <div class="space-y-6">
                    <div>
                        <span class="px-3 py-1 text-xs font-semibold uppercase tracking-wider text-primary bg-primary/10 rounded-full">
                            {{ $memory['category'] ?? 'Custom Wall' }}
                        </span>
                        <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white mt-3">
                            {{ $memory['title'] ?? 'Family Vacation Memory Frame' }}
                        </h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            Created on {{ $memory['date'] ?? now()->format('F Y') }}
                        </p>
                    </div>

                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        {{ $memory['description'] ?? 'This custom arrangement highlights cherished moments with premium wood finishing and anti-glare glass protective layers.' }}
                    </p>

                    <div class="border-t border-b border-gray-100 dark:border-gray-800 py-4 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500 dark:text-gray-400">Frame Type:</span>
                            <span class="font-semibold text-gray-900 dark:text-white">{{ $memory['frame_type'] ?? 'Matte Black Aluminum' }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500 dark:text-gray-400">Dimensions:</span>
                            <span class="font-semibold text-gray-900 dark:text-white">{{ $memory['size'] ?? '12" x 18" Grid' }}</span>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="#" class="bg-primary hover:bg-primary-dark text-white font-bold px-6 py-3 rounded-xl transition text-center flex-1">
                            Customize Similar Frame
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection