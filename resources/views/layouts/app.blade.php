<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <!-- SEO & Open Graph Meta -->
    <title>@yield('title', 'SuperFrames | Frames That Hold Memories Forever')</title>
    <meta name="description" content="@yield('meta_description', 'Handcrafted personalized photo frames, 3D shadow boxes, and quilling art designed to preserve your precious memories forever.')">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'SuperFrames | Handcrafted Photo Frames')">
    <meta property="og:description" content="@yield('meta_description', 'Celebrate life\'s special moments with beautifully handcrafted, fully personalized photo frames.')">
    <meta property="og:image" content="@yield('og_image', asset('images/banners/og-banner.jpg'))">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

    <!-- Fonts & Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="min-h-full bg-[var(--color-background)] text-[var(--color-body)] font-body antialiased flex flex-col justify-between selection:bg-[var(--color-primary)] selection:text-white">

    <!-- Top Navigation Header with Integrated Mobile Menu -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow relative">
        @yield('content')
    </main>

    <!-- Global Floating WhatsApp CTA Button -->
    @include('partials.whatsapp-floating')

    <!-- Scroll To Top Button -->
    @include('partials.scroll-top')

    <!-- Global Footer Newsletter -->
    @include('partials.newsletter')

    <!-- Main Global Footer -->
    @include('partials.footer')

    <!-- Third-Party Scripts & Global Helpers -->
    @include('partials.scripts')
    @stack('scripts')
</body>
</html>