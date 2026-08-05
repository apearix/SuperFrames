@php
    $testimonials = include resource_path('data/testimonials.php');
@endphp

<section class="py-16 md:py-24 bg-[var(--color-section)] border-t border-b border-[var(--color-border)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="font-eyebrow text-2xl text-[var(--color-primary)] block mb-1">
                Customer Love ♡
            </span>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold text-[var(--color-primary)] tracking-tight">
                What Our Clients Say
            </h2>
            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4 fill-current"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($testimonials as $item)
                <div
                    class="bg-white p-8 rounded-3xl border border-[var(--color-border)] shadow-xs flex flex-col justify-between">
                    <div>
                        <!-- Rating Stars -->
                        <div class="flex items-center gap-1 text-[var(--color-warning)] mb-4">
                            @for ($i = 0; $i < $item['rating']; $i++)
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            @endfor
                        </div>

                        <p class="text-sm text-[var(--color-body)] leading-relaxed italic mb-6">
                            "{{ $item['review'] }}"
                        </p>
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-[var(--color-border)]/60">
                        <div
                            class="w-10 h-10 rounded-full overflow-hidden border border-[var(--color-border)] shrink-0">
                            <img src="{{ asset($item['avatar']) }}" alt="{{ $item['name'] }}"
                                class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-heading text-base font-bold text-[var(--color-primary)] leading-tight">
                                {{ $item['name'] }}
                            </h3>
                            <p class="text-xs text-[var(--color-body)]">{{ $item['city'] }} • <span
                                    class="text-[var(--color-secondary)] font-medium">{{ $item['occasion'] }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
