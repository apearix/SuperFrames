<button 
    type="button"
    x-data="{ show: false }"
    x-show="show"
    @scroll.window="show = (window.pageYOffset > 400)"
    @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4"
    class="fixed bottom-6 left-6 z-40 w-11 h-11 rounded-full bg-[var(--color-primary)] text-white flex items-center justify-center shadow-md hover:bg-[var(--color-primary-hover)] focus:outline-hidden focus:ring-2 focus:ring-[var(--color-secondary)] transition-all duration-300"
    aria-label="Scroll to top"
    style="display: none;"
>
    <i data-lucide="chevron-up" class="w-5 h-5"></i>
</button>