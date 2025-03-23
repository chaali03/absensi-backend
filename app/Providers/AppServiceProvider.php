<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
>>>>>>> 5c2bba03ed490e07cdda0061a5ee32b07d8cdffd
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
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(191); // Opsional, untuk kompatibilitas database lama
>>>>>>> 5c2bba03ed490e07cdda0061a5ee32b07d8cdffd
    }
}
