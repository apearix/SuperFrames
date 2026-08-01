@props(['image', 'link' => 'https://instagram.com'])

<a 
    href="{{ $link }}" 
    target="_blank" 
    rel="noopener"
    class="group relative rounded-xl overflow-hidden aspect-square border border-[var(--color-border)] bg-white shadow-2xs block"
>
    <img 
        src="{{ asset($image) }}" 
        alt="Social Post" 
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
        loading="lazy"
    >
    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
        <i data-lucide="instagram" class="w-6 h-6"></i>
    </div>
</a>