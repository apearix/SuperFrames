@extends('layouts.app')

@section('content')
    {{-- Page Banner --}}
    @include('partials.page-banner', [
        'title' => $occasion['name'] ?? 'Shop by Occasion',
        'subtitle' => 'Find the perfect frame tailored for weddings, birthdays, anniversaries, and special moments.',
        'breadcrumbs' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Occasions', 'url' => '#']
        ]
    ])

    <section class="py-12 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            
            {{-- Section Heading --}}
            <x-sections.section-heading 
                badge="Special Events"
                title="Celebrate Every Moment" 
                subtitle="Select an occasion to explore specially curated frame designs."
            />

            {{-- Occasion Cards Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                @forelse($occasions ?? [] as $item)
                    <a href="{{ $item['url'] ?? '#' }}" class="group relative rounded-2xl overflow-hidden aspect-[3/4] shadow-md bg-gray-800 block">
                        <img src="{{ $item['image'] ?? 'https://images.unsplash.com/photo-1518895949257-7621c3c786d7?q=80&w=800' }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                            <div>
                                <h3 class="text-white font-bold text-xl">{{ $item['name'] }}</h3>
                                <p class="text-xs text-gray-300 mt-1">Explore Collection &rarr;</p>
                            </div>
                        </div>
                    </a>
                @empty
                    @php
                        $defaultOccasions = [
                            ['name' => 'Weddings', 'desc' => 'Timeless memory frames for couples'],
                            ['name' => 'Birthdays', 'desc' => 'Fun and vibrant frame collections'],
                            ['name' => 'Anniversaries', 'desc' => 'Celebrate milestones together'],
                            ['name' => 'Graduation', 'desc' => 'Honor achievements & diplomas'],
                        ];
                    @endphp
                    @foreach($defaultOccasions as $item)
                        <a href="#" class="group relative rounded-2xl overflow-hidden aspect-[3/4] bg-gray-800 block shadow-sm hover:shadow-lg transition duration-300">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-5">
                                <div>
                                    <h3 class="text-white font-bold text-xl">{{ $item['name'] }}</h3>
                                    <p class="text-xs text-gray-300 mt-1">{{ $item['desc'] }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endforelse
            </div>

        </div>
    </section>
@endsection