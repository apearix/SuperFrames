<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">

    <title>@yield('title', 'SuperFrames')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body
    class="min-h-full bg-[var(--color-background)] text-[var(--color-body)] font-body antialiased flex flex-col justify-between selection:bg-[var(--color-primary)] selection:text-white">

    <!-- Minimal Header with Brand Logo -->
    <header class="py-6 bg-white border-b border-[var(--color-border)] shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 flex items-center justify-between">
            <a href="/" class="inline-flex items-center gap-3">
                <div
                    class="w-10 h-10 rounded-lg bg-[var(--color-primary)] flex items-center justify-center text-[var(--color-secondary)] font-heading font-bold text-xl">
                    SF
                </div>
                <div class="flex flex-col">
                    <span
                        class="font-heading font-bold text-xl tracking-wider text-[var(--color-primary)] leading-none">SUPER
                        FRAMES</span>
                    <span class="font-eyebrow text-xs text-[var(--color-secondary)] mt-0.5">Frames That Hold
                        Memories</span>
                </div>
            </a>

            <a href="/"
                class="inline-flex items-center text-xs font-semibold text-[var(--color-primary)] hover:text-[var(--color-secondary)] transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i> Return to Home
            </a>
        </div>
    </header>

    <!-- Guest Content Slot -->
    <main id="main-content" class="flex-grow flex flex-col justify-center py-12">
        @yield('content')
    </main>

    <!-- Floating WhatsApp Overlay -->
    @include('partials.whatsapp-floating')

    <!-- Minimal Footer -->
    <footer
        class="py-6 bg-[var(--color-primary)] text-white text-center text-xs border-t border-[var(--color-border)]/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <p>&copy; {{ date('Y') }} SuperFrames. All Rights Reserved. Handcrafted with Love.</p>
        </div>
    </footer>

    <!-- Scripts -->
    @include('partials.scripts')
    @stack('scripts')
</body>

</html>
