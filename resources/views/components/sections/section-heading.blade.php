@props([
    'badge' => null,
    'title' => 'Section Title',
    'subtitle' => null,
    'align' => 'center', // 'center' or 'left'
])

@php
    $alignmentClasses = $align === 'left' ? 'text-left items-start' : 'text-center items-center';
@endphp

<div class="flex flex-col {{ $alignmentClasses }} max-w-3xl mx-auto mb-10 px-4">
    @if ($badge)
        <span class="inline-block px-3 py-1 mb-3 text-xs font-semibold tracking-wider text-primary bg-primary/10 uppercase rounded-full">
            {{ $badge }}
        </span>
    @endif

    <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 dark:text-white tracking-tight">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mt-3 text-base md:text-lg text-gray-600 dark:text-gray-400">
            {{ $subtitle }}
        </p>
    @endif
</div>