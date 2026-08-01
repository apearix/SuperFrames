@props(['faq'])

<div x-data="{ open: false }" class="bg-white rounded-2xl border border-[var(--color-border)] p-6 shadow-2xs transition-all">
    <button 
        type="button" 
        @click="open = !open" 
        class="w-full flex items-center justify-between text-left font-heading text-lg font-bold text-[var(--color-primary)] focus:outline-hidden cursor-pointer"
    >
        <span>{{ $faq['question'] }}</span>
        <i data-lucide="chevron-down" class="w-5 h-5 text-[var(--color-secondary)] transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
    </button>
    
    <div x-show="open" x-collapse style="display: none;" class="mt-3 text-xs sm:text-sm text-[var(--color-body)] leading-relaxed border-t border-[var(--color-border)]/50 pt-3">
        {{ $faq['answer'] }}
    </div>
</div>