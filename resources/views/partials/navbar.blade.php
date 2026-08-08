<div x-data="{ mobileMenuOpen: false }">
    <header class="fixed w-full top-0 z-40 bg-[#FBF9F5]/95 backdrop-blur-md border-b border-[var(--color-border)] shadow-2xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-20">

                <!-- Brand Logo -->
                <a href="/" class="flex items-center gap-3 shrink-0 focus:outline-hidden">
                    <div class="w-11 h-11">
                        <img src="/images/logo.png" alt="Super Frames Logo" class="w-11 h-11 object-contain">
                    </div>

                    <div class="flex flex-col">
                        <span
                            class="font-heading font-semibold text-lg sm:text-xl text-[var(--color-primary)] leading-none">
                            SUPER FRAMES
                        </span>
                        <span class="text-xs sm:text-xs text-[var(--color-primary)] mt-1 font-sans">
                            Framing Memories, Forever
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-8" aria-label="Main Navigation">
                    <a href="/"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Home</a>
                    {{-- <a href="/shop-by-occasion"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Shop by Occasion</a>
                    <a href="/shop-by-frame-style"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Shop by Frame
                        Style</a> --}}
                    <a href="/products"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Best
                        Sellers</a>
                    <a href="/gallery"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Gallery</a>
                    <a href="/about" class="text-base font-medium text-[var(--color-primary)] transition-colors">Our
                        Story</a>
                    <a href="/blog"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Blog</a>
                    <a href="/contact"
                        class="text-base font-medium text-[var(--color-primary)] transition-colors">Contact
                        Us</a>
                </nav>

                <!-- Right Action Icons -->
                <div class="flex items-center gap-4 sm:gap-5 shrink-0">
                    <!-- Search Icon -->
                    <button type="button" aria-label="Search"
                        class="text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition-colors focus:outline-hidden">
                        <i data-lucide="search" class="w-5 h-5 stroke-[1.75]"></i>
                    </button>

                    <!-- User Account Icon -->
                    <a href="/contact" aria-label="Account"
                        class="text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition-colors hidden sm:block focus:outline-hidden">
                        <i data-lucide="user" class="w-5 h-5 stroke-[1.75]"></i>
                    </a>

                    <!-- WhatsApp Circle Icon -->
                    <a href="https://wa.me/919876543210" target="_blank" rel="noopener" aria-label="Contact on WhatsApp"
                        class="text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition-colors hidden sm:block focus:outline-hidden">
                        <i data-lucide="phone-call" class="w-5 h-5 stroke-[1.75]"></i>
                    </a>

                    <!-- Mobile Menu Button (Triggers Drawer) -->
                    <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                        class="lg:hidden text-[var(--color-primary)] hover:text-[var(--color-secondary)] focus:outline-hidden p-1 cursor-pointer"
                        aria-label="Open Mobile Menu">
                        <i data-lucide="menu" class="w-6 h-6 stroke-[1.75]"></i>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <!-- Mobile Drawer Container -->
    <div @keydown.escape.window="mobileMenuOpen = false" x-show="mobileMenuOpen" class="relative z-50 lg:hidden"
        style="display: none;" role="dialog" aria-modal="true">
        <!-- Backdrop Overlay -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 backdrop-blur-xs"
            @click="mobileMenuOpen = false">
        </div>

        <!-- Drawer Panel -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed inset-y-0 right-0 z-50 w-full max-w-xs bg-[#FBF9F5] shadow-2xl flex flex-col justify-between overflow-y-auto">
            <div>
                <!-- Mobile Menu Header -->
                <div class="p-5 flex items-center justify-between border-b border-[var(--color-border)]">
                    <a href="/" class="flex items-center gap-2.5">
                        <div
                            class="w-9 h-9 border-2 border-[var(--color-secondary)] bg-[#FDFBF7] flex items-center justify-center rounded-sm">
                            <span class="font-heading font-bold text-lg text-[var(--color-secondary)]">SF</span>
                        </div>
                        <span class="font-heading font-bold text-base text-[var(--color-primary)]">SUPER FRAMES</span>
                    </a>
                    <button type="button" @click="mobileMenuOpen = false"
                        class="p-2 text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition-colors focus:outline-hidden"
                        aria-label="Close Navigation Menu">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav class="p-6 flex flex-col gap-3">
                    <a href="/" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Home</a>
                    {{-- <a href="/shop-by-occasion" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Shop
                        by Occasion</a>
                    <a href="/shop-by-frame-style" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Shop
                        by Frame Style</a> --}}
                    <a href="/products" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Best
                        Sellers</a>
                    <a href="/gallery" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Gallery</a>
                    <a href="/about" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Our
                        Story</a>
                    <a href="/blog" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Blog</a>
                    <a href="/contact" @click="mobileMenuOpen = false"
                        class="text-sm font-semibold text-[var(--color-primary)] py-2 border-b border-[var(--color-border)]/60 hover:text-[var(--color-secondary)] transition-colors">Contact
                        Us</a>
                </nav>
            </div>

            <!-- Footer Callout -->
            <div class="p-6 bg-[var(--color-section)] border-t border-[var(--color-border)]">
                <a href="https://wa.me/919876543210" target="_blank"
                    class="w-full flex items-center justify-center gap-2 px-4 py-3 rounded-lg bg-[var(--color-primary)] text-white text-xs font-semibold hover:bg-[var(--color-primary-hover)] transition-colors">
                    <i data-lucide="message-circle" class="w-4 h-4 text-[#25D366]"></i>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</div>
