<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar',

        ]);

        Blade::if('isSistemas', function () {
            return auth()->user()->hasRole('sistemas');
        });//El que todo lo ve

        Blade::if('isCoordinacion', function () {
            return auth()->user()->hasRole('coordinacion');
        }); //Puede ver Pacientes-Terapeutas

        Blade::if('isRecepcion', function () {
            return auth()->user()->hasRole('recepcion');
        }); //Solo ve info general de  pacientes
        
        Blade::if('isUser', function () {
            return auth()->user()->hasRole('paciente');
        });//Solo su perfil, expediente y su terapeuta asignado
    }
}