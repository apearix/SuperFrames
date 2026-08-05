@php
    $settings = include resource_path('data/settings.php');
@endphp

<footer class="bg-[var(--color-primary)] text-white pt-16 pb-8 border-t border-[var(--color-border)]/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-6 border-b border-white/10">

            <!-- Brand Column -->
            <div class="lg:col-span-2">
                <a href="/" class="flex items-center gap-3 shrink-0 focus:outline-hidden mb-3">
                    <div class="w-11 h-11">
                        <img src="/images/logo.png" alt="Super Frames Logo" class="w-11 h-11 object-contain">
                    </div>

                    <div class="flex flex-col">
                        <span class="font-heading font-semibold text-lg sm:text-xl text-white leading-none">
                            SUPER FRAMES
                        </span>
                        <span class="text-xs sm:text-xs text-white mt-1 font-sans">
                            Framing Memories, Forever
                        </span>
                    </div>
                </a>

                <p class="text-xs sm:text-sm text-gray-300 leading-relaxed max-w-sm mb-3">
                    Handcrafted personalized frames that turn your most precious moments into timeless memories. Crafted
                    with love and premium materials.
                </p>

                <div class="flex flex-col gap-2.5 text-xs sm:text-sm text-gray-300">
                    <a href="tel:+919876543210"
                        class="inline-flex items-center gap-2 hover:text-[var(--color-secondary)] transition-colors">
                        <i data-lucide="phone" class="w-4 h-4 text-[var(--color-secondary)]"></i>
                        <span>+91 98765 43210</span>
                    </a>
                    <a href="mailto:hello@superframes.in"
                        class="inline-flex items-center gap-2 hover:text-[var(--color-secondary)] transition-colors">
                        <i data-lucide="mail" class="w-4 h-4 text-[var(--color-secondary)]"></i>
                        <span>hello@superframes.in</span>
                    </a>
                    <div class="inline-flex items-start gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-[var(--color-secondary)] shrink-0 mt-0.5"></i>
                        <span>Nagpur, Maharashtra, India</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="font-heading font-bold text-base text-white mb-4 tracking-wide">Quick Links</h3>
                <ul class="space-y-2.5 text-xs sm:text-sm text-gray-300">
                    <li><a href="/" class="hover:text-[var(--color-secondary)] transition-colors">Home</a></li>
                    <li><a href="/shop-by-occasion" class="hover:text-[var(--color-secondary)] transition-colors">Shop
                            by Occasion</a></li>
                    <li><a href="/shop-by-frame-style"
                            class="hover:text-[var(--color-secondary)] transition-colors">Shop by Frame Style</a></li>
                    <li><a href="/best-sellers" class="hover:text-[var(--color-secondary)] transition-colors">Best
                            Sellers</a></li>
                    <li><a href="/gallery" class="hover:text-[var(--color-secondary)] transition-colors">Gallery</a>
                    </li>
                    <li><a href="/memory-wall" class="hover:text-[var(--color-secondary)] transition-colors">Customer
                            Memory Wall</a></li>
                    <li><a href="/about" class="hover:text-[var(--color-secondary)] transition-colors">Our Story</a>
                    </li>
                    <li><a href="/blog" class="hover:text-[var(--color-secondary)] transition-colors">Blog</a></li>
                    <li><a href="/contact" class="hover:text-[var(--color-secondary)] transition-colors">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Shop by Occasion -->
            <div>
                <h3 class="font-heading font-bold text-base text-white mb-4 tracking-wide">Shop by Occasion</h3>
                <ul class="space-y-2.5 text-xs sm:text-sm text-gray-300">
                    <li><a href="/occasion/anniversary"
                            class="hover:text-[var(--color-secondary)] transition-colors">Anniversary</a></li>
                    <li><a href="/occasion/birthday"
                            class="hover:text-[var(--color-secondary)] transition-colors">Birthday</a></li>
                    <li><a href="/occasion/baby" class="hover:text-[var(--color-secondary)] transition-colors">Baby</a>
                    </li>
                    <li><a href="/occasion/wedding"
                            class="hover:text-[var(--color-secondary)] transition-colors">Wedding</a></li>
                    <li><a href="/occasion/family"
                            class="hover:text-[var(--color-secondary)] transition-colors">Family</a></li>
                    <li><a href="/occasion/pet" class="hover:text-[var(--color-secondary)] transition-colors">Pet</a>
                    </li>
                    <li><a href="/occasion/graduation"
                            class="hover:text-[var(--color-secondary)] transition-colors">Graduation</a></li>
                    <li><a href="/shop-by-occasion"
                            class="text-[var(--color-secondary)] font-medium hover:underline">All Occasions →</a></li>
                </ul>
            </div>

            <!-- Shop by Frame Style -->
            <div>
                <h3 class="font-heading font-bold text-base text-white mb-4 tracking-wide">Shop by Frame Style</h3>
                <ul class="space-y-2.5 text-xs sm:text-sm text-gray-300">
                    <li><a href="/frame-style/3d-shadow-box"
                            class="hover:text-[var(--color-secondary)] transition-colors">3D Shadow Box</a></li>
                    <li><a href="/frame-style/quilling-name-frame"
                            class="hover:text-[var(--color-secondary)] transition-colors">Quilling Name Frame</a></li>
                    <li><a href="/frame-style/3d-mini-desk-frame"
                            class="hover:text-[var(--color-secondary)] transition-colors">3D Mini Desk Frame</a></li>
                    <li><a href="/frame-style/classic-a4-print-frame"
                            class="hover:text-[var(--color-secondary)] transition-colors">Classic A4 Print Frame</a>
                    </li>
                    <li><a href="/frame-style/pop-up-frame"
                            class="hover:text-[var(--color-secondary)] transition-colors">Pop-up Frame</a></li>
                    <li><a href="/shop-by-frame-style"
                            class="text-[var(--color-secondary)] font-medium hover:underline">All Frame Styles →</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Copyright Bar -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-400">
            <p>&copy; {{ date('Y') }} Super Frames. All Rights Reserved.</p>
            <div class="flex items-center gap-6">
                <a href="/privacy-policy" class="hover:text-[var(--color-secondary)] transition-colors">Privacy
                    Policy</a>
                <a href="/terms" class="hover:text-[var(--color-secondary)] transition-colors">Terms of Use</a>
                <a href="/shipping" class="hover:text-[var(--color-secondary)] transition-colors">Shipping Info</a>
                <a href="/return-policy" class="hover:text-[var(--color-secondary)] transition-colors">Return Policy</a>
            </div>
        </div>
    </div>
</footer>
