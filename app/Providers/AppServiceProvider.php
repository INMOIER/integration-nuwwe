<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Grammar;

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
        // Adding 'si_no' type column
        Grammar::macro('typeSi_no', function () {
            return 'si_no';
        });

        // Adding 'sexo' type column
        Grammar::macro('typeSexo', function () {
            return 'sexo';
        });
    }
}
