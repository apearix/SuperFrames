@extends('layouts.app')

@section('title', 'SuperFrames | Handcrafted Personalized Photo Frames & 3D Keepsakes')

@section('content')
    <!-- 1. Hero Section -->
    <x-sections.hero />

    <!-- 2. Shop by Frame Style -->
    <x-sections.shop-by-frame-style />

    <!-- 3. Best Sellers -->
    <x-sections.best-sellers />

    <!-- 4. Customer Memory Wall -->
    <x-sections.memory-wall />

    <!-- 5. Latest Blogs -->
    <x-sections.latest-blogs />

    <!-- 6. Frequently Asked Questions -->
    <x-sections.faq />
@endsection