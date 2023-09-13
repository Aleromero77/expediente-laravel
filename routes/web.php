<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::view('/', 'welcome')->name('welcome');

Route:: view('inicio', 'dashboard.inicio')->name('inicio')->Middleware('auth');


Route:: view('register', 'auth.register')->name('register')->Middleware('auth');;
Route::POST ('register', [RegisteredUserController::class, 'store'])->Middleware('auth');;
Route::view('login', 'auth.login')->name('login');
Route::POST ('login', [AuthenticatedSessionController::class, 'iniciarSesion']);
Route::POST ('salir', [AuthenticatedSessionController::class, 'cerrarSesion']);

Route:: view('perfil', 'auth.perfil')->name('Perfil')->Middleware('auth');;
Route::view('consultasUsers', 'dashboard.consultasUsers')->name('consultasUsers');