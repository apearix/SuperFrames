@props(['step'])

<div class="text-center flex flex-col items-center">
    <div class="relative w-28 h-28 rounded-full overflow-hidden border-4 border-white shadow-md mb-4 bg-[var(--color-section)]">
        <img src="{{ asset($step['image']) }}" alt="{{ $step['title'] }}" class="w-full h-full object-cover">
        <span class="absolute bottom-1 right-1 w-7 h-7 rounded-full bg-[var(--color-primary)] text-white text-xs font-bold flex items-center justify-center">
            {{ $step['step'] }}
        </span>
    </div>
    <h3 class="font-heading text-lg font-bold text-[var(--color-primary)] mb-2">{{ $step['title'] }}</h3>
    <p class="text-xs text-[var(--color-body)] leading-relaxed">{{ $step['description'] }}</p>
</div>