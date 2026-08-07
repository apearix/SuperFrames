<?php

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Best Sellers Listing
Route::get('/best-sellers', function () {
    return view('pages.best-sellers');
})->name('best-sellers');

// Frame Styles
Route::get('/shop-by-frame-style', function () {
    return view('pages.frame-style-detail', ['slug' => '3d-shadow-box']);
})->name('frame-styles.index');

Route::get('/frame-style/{slug}', function ($slug) {
    return view('pages.frame-style-detail', ['slug' => $slug]);
})->name('frame-styles.show');

// Occasions
Route::get('/shop-by-occasion', function () {
    return view('pages.occasion-detail', ['slug' => 'anniversary']);
})->name('occasions.index');

Route::get('/occasion/{slug}', function ($slug) {
    return view('pages.occasion-detail', ['slug' => $slug]);
})->name('occasions.show');

// Product Listing & Details
Route::get('/products', function (Request $request) {
    $products = collect(include resource_path('data/products.php'));
    $styles = include resource_path('data/frame-styles.php');

    // 1. Filter by Occasion
    if ($request->filled('occasion') && $request->occasion !== 'all') {
        $products = $products->filter(function ($item) use ($request) {
            return strtolower($item['occasion'] ?? '') === strtolower($request->occasion);
        });
    }

    // 2. Filter by Frame Style
    if ($request->filled('style') && $request->style !== 'all') {
        $products = $products->filter(function ($item) use ($request) {
            return strtolower($item['style_slug'] ?? '') === strtolower($request->style);
        });
    }

    // 3. Filter by Price Range
    if ($request->filled('max_price')) {
        $products = $products->filter(function ($item) use ($request) {
            $price = (float) str_replace(',', '', $item['price']);

            return $price <= (float) $request->max_price;
        });
    }

    // 4. Sort Products
    if ($request->filled('sort')) {
        switch ($request->sort) {
            case 'price_low':
                $products = $products->sortBy(fn ($item) => (float) str_replace(',', '', $item['price']));
                break;
            case 'price_high':
                $products = $products->sortByDesc(fn ($item) => (float) str_replace(',', '', $item['price']));
                break;
            case 'bestseller':
                $products = $products->sortByDesc(fn ($item) => $item['is_bestseller'] ?? false);
                break;
            default:
                $products = $products->sortByDesc('id');
                break;
        }
    }

    // 5. Pagination
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 8;
    $currentItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->all();

    $paginatedProducts = new LengthAwarePaginator(
        $currentItems,
        $products->count(),
        $perPage,
        $currentPage,
        ['path' => LengthAwarePaginator::resolveCurrentPath(), 'query' => $request->query()]
    );

    $pageTitle = 'All Personalized Frames';
    if ($request->filled('occasion') && $request->occasion !== 'all') {
        $pageTitle = ucfirst($request->occasion).' Frames';
    } elseif ($request->filled('style') && $request->style !== 'all') {
        $matchedStyle = collect($styles)->firstWhere('slug', $request->style);
        $pageTitle = $matchedStyle['title'] ?? 'Frame Style';
    }

    return view('pages.products', [
        'products' => $paginatedProducts,
        'styles' => $styles,
        'pageTitle' => $pageTitle,
    ]);
})->name('products');

Route::get('/product/{slug}', function ($slug) {
    return view('pages.product-detail', ['slug' => $slug]);
})->name('product.detail');

// Customer Memory Wall & Gallery
Route::get('/memory-wall', function () {
    return view('pages.memory-wall');
})->name('memory-wall');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

// About Us & Contact
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Blog Pages Group (Prefix + Name Prefix)
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', function () {
        return view('pages.blog');
    })->name('index');

    Route::get('/{slug}', function ($slug) {
        return view('pages.blog-detail', ['slug' => $slug]);
    })->name('detail');
});

// Legal Policies
Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy-policy');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/shipping', function () {
    return view('pages.shipping');
})->name('shipping');

Route::get('/return-policy', function () {
    return view('pages.return-policy');
})->name('return-policy');
