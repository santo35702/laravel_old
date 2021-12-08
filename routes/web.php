<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\FAQPage;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\CartPage;
use App\Http\Livewire\Frontend\ProductPage;
use App\Http\Livewire\Frontend\AboutUsPage;
use App\Http\Livewire\Frontend\ComparePage;
use App\Http\Livewire\Frontend\NotFoundPage;
use App\Http\Livewire\Frontend\CheckoutPage;
use App\Http\Livewire\Frontend\WishlistPage;
use App\Http\Livewire\Frontend\ContactUsPage;
use App\Http\Livewire\Frontend\ProductByBrand;
use App\Http\Livewire\Frontend\ProductListPage;
use App\Http\Livewire\Frontend\ProductByCategory;
use App\Http\Livewire\Frontend\ProductDetailsPage;
use App\Http\Livewire\Frontend\ProductByListCategory;
use App\Http\Livewire\Frontend\SearchPage;
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\Admin\ProductPage as AdminProductPage;
use App\Http\Livewire\Admin\CategoryPage;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AddProductPage;
use App\Http\Livewire\Admin\EditProductPage;
use App\Http\Livewire\Admin\AddCategoryPage;
use App\Http\Livewire\Admin\EditCategoryPage;
use App\Http\Livewire\Admin\HomeCarouselPage;
use App\Http\Livewire\Admin\HomeCategoryPage;
use App\Http\Livewire\Admin\HomeCarouselAddPage;
use App\Http\Livewire\Admin\HomeCarouselEditPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', HomePage::class)->name('home');

Route::get('/about-us', AboutUsPage::class)->name('about');

Route::prefix('products/')->name('products.')->group(function ()
{
    Route::get('/', ProductPage::class)->name('index');
    Route::prefix('list')->name('list.')->group(function ()
    {
        Route::get('/', ProductListPage::class)->name('index');
        Route::get('/categories/{slug}', ProductByListCategory::class)->name('by_category');
    });
    Route::get('/search', SearchPage::class)->name('search');
    Route::get('/{slug}', ProductDetailsPage::class)->name('details');
    Route::get('/categories/{slug}', ProductByCategory::class)->name('by_category');
    Route::get('/brands/{slug}', ProductByBrand::class)->name('by_brands');
});

Route::get('/faqs', FAQPage::class)->name('faq');

Route::get('/cart', CartPage::class)->name('cart');

Route::get('/checkout', CheckoutPage::class)->name('checkout');

Route::get('/compare', ComparePage::class)->name('compare');

Route::get('/wishlist', WishlistPage::class)->name('wishlist');

Route::get('/contact-us', ContactUsPage::class)->name('contact');

Route::get('/404', NotFoundPage::class)->name('not_found');

// Users / Customers Router__
Route::middleware(['auth:sanctum', 'verified'])->prefix('users/')->name('users.')->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');
});

// Admin Route__
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->prefix('admin/')->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::prefix('products')->name('products.')->group(function ()
    {
        Route::get('/', AdminProductPage::class)->name('index');
        Route::get('/add', AddProductPage::class)->name('add');
        Route::get('/edit/{id}', EditProductPage::class)->name('edit');
    });

    Route::prefix('categories')->name('categories.')->group(function ()
    {
        Route::get('/', CategoryPage::class)->name('index');
        Route::get('/add', AddCategoryPage::class)->name('add');
        Route::get('/edit/{id}', EditCategoryPage::class)->name('edit');
    });

    Route::prefix('carousel')->name('carousel.')->group(function ()
    {
        Route::get('/', HomeCarouselPage::class)->name('index');
        Route::get('/add', HomeCarouselAddPage::class)->name('add');
        Route::get('/edit/{id}', HomeCarouselEditPage::class)->name('edit');
    });

    Route::get('/home-category', HomeCategoryPage::class)->name('new_arrival');
});
