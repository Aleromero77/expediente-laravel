<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::view('/', 'welcome')->name('welcome');

Route:: view('inicio', 'dashboard.inicio')->name('inicio')->Middleware('auth');


Route:: view('registro', 'auth.register')->name('register')->Middleware('auth');;
Route::POST ('registro', [RegisteredUserController::class, 'store'])->Middleware('auth');;
Route::view('inicar-Sesion', 'auth.login')->name('login');
Route::POST ('inicar-Sesion', [AuthenticatedSessionController::class, 'iniciarSesion']);
Route::POST ('salir', [AuthenticatedSessionController::class, 'cerrarSesion']);

Route::get('consultasUsers', [AuthenticatedSessionController::class, 'usersTables'])->name('consultasUsers');

Route::view('perfil', 'auth.perfil')->name('perfil');