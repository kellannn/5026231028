<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
    }
}

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

public function boot()
{
    // Tambahkan logger untuk setiap request
    app('router')->matched(function ($event) {
        $uri = $event->route->uri(); // menangkap nama route
        DB::table('logactivity')->insert([
            'namaroute' => '/' . $uri
        ]);
    });
}
