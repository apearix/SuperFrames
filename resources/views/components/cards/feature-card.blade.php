@props([
    'icon' => 'heart',
    'title' => '',
    'description' => ''
])

<div class="bg-white p-6 rounded-2xl border border-[var(--color-border)] shadow-2xs hover:border-[var(--color-secondary)] transition-all duration-300 text-center">
    <div class="w-12 h-12 mx-auto rounded-full bg-[var(--color-section)] text-[var(--color-primary)] flex items-center justify-center mb-4">
        <i data-lucide="{{ $icon }}" class="w-6 h-6"></i>
    </div>
    <h3 class="font-heading text-lg font-bold text-[var(--color-primary)] mb-2">
        {{ $title }}
    </h3>
    <p class="text-xs text-[var(--color-body)] leading-relaxed">
        {{ $description }}
    </p>
</div>