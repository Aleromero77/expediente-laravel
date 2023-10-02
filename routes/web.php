<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Validation\Rules\Can;

Route::view('/', 'welcome')->name('welcome');      
Route::view('iniciar-Sesion', 'auth.login')->name('login');
Route::POST('iniciar-Sesion', [AuthenticatedSessionController::class, 'iniciarSesion']);


//-------------------------------------------------------------------------------------------\\

Route::middleware(['auth'])->group(function () {

    
    
    Route::POST('salir', [AuthenticatedSessionController::class, 'cerrarSesion'])->name('salir');
    Route::resource('usuarios', UserController::class)
            ->parameters(['usuarios' => 'users'])
            ->names('users');
            
    Route::get ('dataTables',[UserController::class, 'usersTables'])->name('dataTables');
    Route::get('inicio',[UserController::class,'obtenerTotalUsuarios'])->name('inicio');
   
    
    Route::get('users', [AuthenticatedSessionController::class, 'iniciarSesion']);


    
});


Route::POST('roles/{user}', [UserController::class, 'roles'])->name('roles');