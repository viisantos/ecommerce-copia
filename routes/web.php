<?php

use App\Http\Controllers\MarketController;
use App\Livewire\Product;
use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/good_price', [MarketController::class, 'index'])->middleware('auth');
//Route::get('/products', [ProductsController::class, 'products'])->middleware('auth');
Route::get('/products', Product::class)->middleware('auth');


