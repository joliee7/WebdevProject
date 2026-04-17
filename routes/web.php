<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\HttpCache\Store;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return 'hi';
})->name('hi'); # route name

Route::get('/hello', function () {
    return 'hello isb pipol';
});

Route::get('/home', function() {
    return view('home'); #return view name
})->name('home');

Route::get('/home', [HomeController::class, 'show'])->name('home.show');

Route::get('/home/sum',[FirstController::class, 'sum'])->name('home.sum');

Route::get('home/multiply/{par1}/{par2}',
[FirstController::class, 'multiply'])->name('home.multiply');

Route::get('home/divide/{par1}/{par2?}',
[FirstController::class, 'divide'])->name('home.multiply');


// Route::get('/store', function() {
//     return view('store');
// })->name('store');

Route::get('/store', [StoreController::class, 'show'])->name('store');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product.insert_form');

Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');

Route::get('/product/edit/{product_id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');

Route::put('/product/update/{product_id}', [StoreController::class, 'update_product'])->name('update_product');

Route::delete('/product/delete/{product_id}', [StoreController::class, 'delete_product'])->name('delete_product');