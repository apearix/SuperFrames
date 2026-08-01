@props([
    'posts' => []
])

<div class="relative w-full py-6">
    <div class="swiper blog-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @forelse($posts as $post)
                <div class="swiper-slide h-auto">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition duration-300 border border-gray-100 dark:border-gray-700 flex flex-col h-full">
                        <div class="aspect-video relative overflow-hidden bg-gray-100">
                            <img src="{{ $post['image'] ?? asset('images/placeholder.jpg') }}" alt="{{ $post['title'] ?? 'Blog' }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-5 flex flex-col flex-grow">
                            <span class="text-xs font-semibold text-primary mb-2 inline-block">{{ $post['category'] ?? 'Article' }}</span>
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white line-clamp-2 mb-2">{{ $post['title'] ?? 'Blog Title' }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 line-clamp-3 mb-4 flex-grow">{{ $post['excerpt'] ?? 'Blog summary goes here...' }}</p>
                            <a href="{{ $post['url'] ?? '#' }}" class="text-sm font-semibold text-primary hover:underline inline-flex items-center gap-1 mt-auto">Read More &rarr;</a>
                        </div>
                    </div>
                </div>
            @empty
                @for($i = 1; $i <= 4; $i++)
                    <div class="swiper-slide h-auto">
                        <div class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-700 flex flex-col h-full">
                            <div class="aspect-video bg-gray-200 dark:bg-gray-700"></div>
                            <div class="p-5 flex flex-col flex-grow">
                                <span class="text-xs font-semibold text-primary mb-2">Tips & Ideas</span>
                                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">How to Choose the Perfect Photo Frame #{{ $i }}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Discover the best ways to style your home walls using custom photo frames...</p>
                                <a href="#" class="text-sm font-semibold text-primary hover:underline">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                @endfor
            @endforelse
        </div>
        <div class="swiper-pagination mt-6"></div>
    </div>
</div>