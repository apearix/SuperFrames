<section class="py-16 bg-[var(--color-section)] border-t border-[var(--color-border)]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="max-w-3xl mx-auto text-center">

            <span class="font-eyebrow text-xl text-[var(--color-primary)] block mb-1">
                Stay Connected ♡
            </span>

            <h2 class="font-heading text-3xl sm:text-4xl font-bold text-[var(--color-primary)] tracking-tight">
                Join the SuperFrames Family
            </h2>

            <div class="flex items-center justify-center gap-2 my-3 text-[var(--color-secondary)]">
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
                <i data-lucide="heart" class="w-4 h-4"></i>
                <span class="h-[1px] w-12 bg-[var(--color-secondary)]/30"></span>
            </div>

            <p class="text-[var(--color-body)] text-sm sm:text-base mb-8">
                Subscribe to receive updates on new handcrafted frame collections, exclusive gifting ideas, and special
                festive offers.
            </p>

            <form action="#" method="POST" @submit.prevent
                class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                <div class="relative flex-1">
                    <input type="email" name="email" placeholder="Enter your email address" required
                        class="w-full px-4 py-3 rounded-lg bg-white border border-[var(--color-border)] text-[var(--color-heading)] placeholder:text-gray-400 text-sm focus:outline-hidden focus:ring-2 focus:ring-[var(--color-primary)] focus:border-transparent transition-all">
                </div>
                <button type="submit"
                    class="px-6 py-3 rounded-lg bg-[var(--color-primary)] text-white font-medium text-sm hover:bg-[var(--color-primary-hover)] transition-colors shrink-0 shadow-xs flex items-center justify-center gap-2">
                    <span>Subscribe</span>
                    <i data-lucide="send" class="w-4 h-4 text-[var(--color-secondary)]"></i>
                </button>
            </form>

            <p class="text-xs text-[var(--color-body)]/70 mt-3">
                We respect your privacy. Unsubscribe at any time.
            </p>

        </div>
    </div>
</section>
