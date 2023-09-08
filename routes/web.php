<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::view ('/register', 'auth.register')->name('register');
Route::GET ('/login', [LoginController::class, 'store'])->name('login');
Route::view ('/inicio', 'dashboard.inicio')->name('inicio');



        // Route::get('/inicio', function () {
    // return view('dashboard.inicio');
// })->name('inicio');

// Auth::routes();

//Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login');