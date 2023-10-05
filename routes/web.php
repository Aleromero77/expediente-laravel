<?php

use App\Http\Controllers\Admin\InicioController;
use App\Http\Controllers\Admin\PerfilController;
use App\Http\Controllers\Admin\RolController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Validation\Rules\Can;

Route::view('/', 'welcome')->name('welcome');
Route::view('iniciar-Sesion', 'auth.login')->name('login');
Route::POST('iniciar-Sesion', [AuthenticatedSessionController::class, 'iniciarSesion']);
Route::POST('salir', [AuthenticatedSessionController::class, 'cerrarSesion'])->name('salir');


//-------------------------------------------------------------------------------------------\\

Route::middleware(['auth'])->group(function () {

        Route::resource('usuarios', UserController::class)
                ->parameters(['usuarios' => 'users'])
                ->names('users');
                
        Route::resource('perfil', PerfilController::class)
                ->only('edit', 'update')
                ->names('perfil');

        Route::resource('rol', RolController::class)
                ->only('edit', 'update')
                ->names('rol');

        Route::resource('roles', RolesController::class)
                ->names('roles');


        Route::get('dataTables', [UserController::class, 'usersTables'])->name('dataTables');
        Route::get('dataRolesTable', [RolesController::class, 'dataRolesTable'])->name('dataRolesTable');
        Route::get('inicio', [InicioController::class, 'contarRoles'])->name('inicio');

        // Route::get('perfil', [PerfilController::class, 'edit'])->name('perfil.edit');
        // Route::put('perfil', [PerfilController::class, 'update'])->name('perfil.update');
});