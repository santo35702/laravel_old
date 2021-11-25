<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\ProductPage;
use App\Http\Livewire\Frontend\AboutUsPage;
use App\Http\Livewire\Frontend\ProductListPage;
use App\Http\Livewire\Frontend\ProductDetailsPage;

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

Route::get('/', HomePage::class)->name('home');

Route::get('/about-us', AboutUsPage::class)->name('about');

Route::prefix('products/')->name('products.')->group(function ()
{
    Route::get('/', ProductPage::class)->name('index');
    Route::get('/list', ProductListPage::class)->name('list');
    Route::get('/details', ProductDetailsPage::class)->name('details');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
