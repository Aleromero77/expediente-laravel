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

        Blade::if('isAdmin', function () {
            return auth()->user()->hasRole('sistemas');
        });

        Blade::if('isAdminOrRecep', function () {
            return auth()->user()->hasRole('sistemas') || auth()->user()->hasRole('recepcion');
        });
    
        Blade::if('isUser', function () {
            return auth()->user()->hasRole('terapeuta');
        });

        
    }}