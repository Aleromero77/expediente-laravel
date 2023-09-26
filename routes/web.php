<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Routing\RouteGroup;

Route::view('/', 'welcome')->name('welcome');
Route::view('inicar-Sesion', 'auth.login')->name('login');
Route::POST('inicar-Sesion', [AuthenticatedSessionController::class, 'iniciarSesion']);
Route::POST('salir', [AuthenticatedSessionController::class, 'cerrarSesion'])->name('salir');


//-------------------------------------------------------------------------------------------\\

Route::middleware(['auth'])->group(function () {

    Route::resource('usuarios', UserController::class)
            ->parameters(['usuarios' => 'users'])
            ->names('users');
    Route::get ('dataTables',[UserController::class, 'usersTables'])->name('dataTables');
    Route::get('inicio',[UserController::class,'obtenerTotalUsuarios'])->name('inicio');
   
    
    Route::get('users', [AuthenticatedSessionController::class, 'iniciarSesion']);


    
});


Route::view('/prueba', 'pacientes.prueba')->name('prueba');