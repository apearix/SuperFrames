<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('pages.home');
});

// Best Sellers Listing
Route::get('/best-sellers', function () {
    return view('pages.best-sellers');
});

// Frame Styles
Route::get('/shop-by-frame-style', function () {
    return view('pages.frame-style-detail', ['slug' => '3d-shadow-box']);
});
Route::get('/frame-style/{slug}', function ($slug) {
    return view('pages.frame-style-detail', ['slug' => $slug]);
});

// Occasions
Route::get('/shop-by-occasion', function () {
    return view('pages.occasion-detail', ['slug' => 'anniversary']);
});
Route::get('/occasion/{slug}', function ($slug) {
    return view('pages.occasion-detail', ['slug' => $slug]);
});

// Product Details
Route::get('/product/{slug}', function ($slug) {
    return view('pages.product-detail', ['slug' => $slug]);
});

// Customer Memory Wall & Gallery
Route::get('/memory-wall', function () {
    return view('pages.memory-wall');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});

// About Us & Contact
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

// Blog Pages
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/blog/{slug}', function ($slug) {
    return view('pages.blog-detail', ['slug' => $slug]);
});

// Legal Policies
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
});
Route::get('/terms', function () {
    return view('pages.terms');
});
Route::get('/shipping', function () {
    return view('pages.shipping');
});
Route::get('/return-policy', function () {
    return view('pages.return-policy');
});