<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/inicio', function () {
    // return view('dashboard.inicio');
// })->name('inicio');

Auth::routes();
Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('home');