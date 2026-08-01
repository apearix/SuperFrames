@extends('layouts.app')

@section('title', 'SuperFrames | Handcrafted Personalized Photo Frames & 3D Keepsakes')

@section('content')
    <!-- 1. Hero Section -->
    <x-sections.hero />

    <!-- 2. Shop by Frame Style -->
    <x-sections.shop-by-frame-style />

    <!-- 3. Shop by Occasion -->
    <x-sections.shop-by-occasion />

    <!-- 4. Best Sellers -->
    <x-sections.best-sellers />

    <!-- 5. Customer Memory Wall -->
    <x-sections.memory-wall />

    <!-- 6. Customer Testimonials -->
    <x-sections.testimonials />

    <!-- 7. Custom Order Call-to-Action -->
    <x-sections.cta />

    <!-- 8. Latest Blogs -->
    <x-sections.latest-blogs />

    <!-- 9. Instagram Feed -->
    <x-sections.instagram-feed />

    <!-- 10. Frequently Asked Questions -->
    <x-sections.faq />
@endsection