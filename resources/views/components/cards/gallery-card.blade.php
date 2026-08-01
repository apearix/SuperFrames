@props(['image', 'title' => 'Handcrafted Frame'])

<a 
    href="{{ asset($image) }}" 
    class="glightbox block group rounded-2xl overflow-hidden border border-[var(--color-border)] aspect-square bg-white shadow-2xs relative"
>
    <img 
        src="{{ asset($image) }}" 
        alt="{{ $title }}" 
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
        <i data-lucide="zoom-in" class="w-7 h-7"></i>
    </div>
</a>