@if ($paginator->hasPages())
<nav class="flex justify-center items-center gap-6 mt-10" role="navigation">

    {{-- Previous --}}
    @if ($paginator->onFirstPage())
        <span class="inline-flex items-center gap-2 text-gray-400 text-sm font-medium cursor-not-allowed">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            Previous
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}"
            class="inline-flex items-center gap-2 text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition font-medium text-sm">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            Previous
        </a>
    @endif

    {{-- Numbers --}}
    <div class="flex items-center gap-3">

        @foreach ($elements as $element)

            @if (is_string($element))
                <span class="px-2 text-gray-400">{{ $element }}</span>
            @endif

            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <span
                            class="w-8 h-8 rounded-full bg-[var(--color-primary)] text-white font-semibold flex items-center justify-center">
                            {{ $page }}
                        </span>

                    @else

                        <a href="{{ $url }}"
                            class="w-10 h-10 rounded-full flex items-center justify-center text-[var(--color-primary)] font-medium hover:bg-gray-100 transition">
                            {{ $page }}
                        </a>

                    @endif

                @endforeach

            @endif

        @endforeach

    </div>

    {{-- Next --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}"
            class="inline-flex items-center gap-2 text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition font-medium text-sm">
            Next
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    @else
        <span class="inline-flex items-center gap-2 text-gray-400 text-sm font-medium cursor-not-allowed">
            Next
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </span>
    @endif

</nav>
@endif