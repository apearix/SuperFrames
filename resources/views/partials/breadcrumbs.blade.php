@props([
    'items' => [] // Expects array of ['label' => 'Home', 'url' => 'https://...']
])

@if(!empty($items) && count($items) > 0)
    <nav aria-label="Breadcrumb" class="py-3 px-4 bg-gray-50 dark:bg-gray-800/50 rounded-lg text-sm text-gray-600 dark:text-gray-400">
        <ol class="flex flex-wrap items-center space-x-2">
            @foreach($items as $item)
                <li class="inline-flex items-center">
                    @if(!$loop->first)
                        <!-- Separator Icon -->
                        <svg class="w-4 h-4 text-gray-400 mx-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    @endif

                    @if(isset($item['url']) && !$loop->last)
                        <a href="{{ $item['url'] }}" class="hover:text-primary transition font-medium text-gray-600 dark:text-gray-300">
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="font-semibold text-gray-900 dark:text-white truncate">
                            {{ $item['label'] }}
                        </span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif