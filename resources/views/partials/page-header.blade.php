@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
    'breadcrumbs' => [],
])

<div class="bg-white border-b border-[var(--color-border)] py-10 md:py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Breadcrumbs -->
        @if (!empty($breadcrumbs))
            <nav class="flex text-xs text-[var(--color-body)] mb-6" aria-label="Breadcrumb">
                <a href="/" class="hover:text-[var(--color-primary)] transition-colors">Home</a>
                @foreach ($breadcrumbs as $label => $link)
                    <span class="mx-2 text-gray-300">></span>
                    @if ($loop->last)
                        <span class="text-[var(--color-primary)] font-medium">{{ $label }}</span>
                    @else
                        <a href="{{ $link }}"
                            class="hover:text-[var(--color-primary)] transition-colors">{{ $label }}</a>
                    @endif
                @endforeach
            </nav>
        @endif

        <!-- Title & Header Content -->
        <div class="text-center max-w-2xl mx-auto">
            @if ($eyebrow)
                <span class="font-eyebrow text-xl text-[var(--color-primary)] block mb-1">
                    {{ $eyebrow }} ♡
                </span>
            @endif

            <h1 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                {{ $title }}
            </h1>

            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>

            @if ($description)
                <p class="text-[var(--color-body)] text-sm sm:text-base leading-relaxed">
                    {{ $description }}
                </p>
            @endif
        </div>

    </div>
</div>
