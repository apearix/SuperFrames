<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| SuperFrame Application Routes.
|
*/

// Home Page
Route::view('/', 'pages.home')->name('home');

// Shop By Occasion
Route::view('/shop-by-occasion', 'pages.occasion')->name('occasion.index');
Route::view('/shop-by-occasion/{slug}', 'pages.occasion-detail')->name('occasion.show');

// Shop By Frame Style
Route::view('/shop-by-frame-style', 'pages.frame-style')->name('style.index');
Route::view('/shop-by-frame-style/{slug}', 'pages.frame-style-detail')->name('style.show');

// Best Sellers & General Gallery
Route::view('/best-sellers', 'pages.best-sellers')->name('bestsellers');
Route::view('/gallery', 'pages.gallery')->name('gallery');

// Customer Memory Wall
Route::view('/customer-memory-wall', 'pages.memory-wall')->name('memory.index');
Route::view('/customer-memory-wall/{slug}', 'pages.memory-detail')->name('memory.show');

// Product Single Page
Route::view('/product/{slug}', 'pages.product-detail')->name('product.show');

// Informational Pages
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

// Blog Routes
Route::view('/blog', 'pages.blog')->name('blog.index');
Route::view('/blog/{slug}', 'pages.blog-detail')->name('blog.show');

// Policy & Legal Pages
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy');
Route::view('/terms-and-conditions', 'pages.terms')->name('terms');
Route::view('/shipping-policy', 'pages.shipping')->name('shipping');
Route::view('/return-policy', 'pages.return-policy')->name('return');

// Fallback Route (404 Page)
Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});