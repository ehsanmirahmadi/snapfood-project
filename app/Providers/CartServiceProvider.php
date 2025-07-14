<?php

namespace App\Providers;

use App\Domain\Cart\http\Interfaces\CartServiceInterFace;
use App\Domain\Cart\http\Services\CartService;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            CartServiceInterFace::class,
            CartService::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
