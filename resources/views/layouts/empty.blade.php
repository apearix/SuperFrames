<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">

    <title>@yield('title', config('app.name', 'SuperFrames'))</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

    <!-- Fonts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="h-full bg-[var(--color-background)] text-[var(--color-body)] font-body antialiased flex flex-col justify-between selection:bg-[var(--color-primary)] selection:text-white">

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow flex flex-col">
        @yield('content')
    </main>

    <!-- Scripts -->
    @include('partials.scripts')
    @stack('scripts')
</body>
</html>