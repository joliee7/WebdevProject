<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/store', function() {
    return view('store');
})->name('store');

Route::get('/about', function() {
    return view('about');
})->name('about');