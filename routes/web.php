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

Route::get('/inicio', function () {
    return view('layouts.index');
});

Route::get('/main', function () {
    return view('layouts.main');
});


