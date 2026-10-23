<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        // Evita el error de longitud de cadena en índices de MySQL
        Schema::defaultStringLength(191);

        // La paginación del CRUD usa los estilos de Bootstrap del login
        Paginator::useBootstrapFive();
    }
}
