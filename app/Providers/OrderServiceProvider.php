<?php

namespace App\Providers;

use App\Domain\Order\http\Interfaces\OrderServiceInterFace;
use App\Domain\Order\http\Services\OrderService;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            OrderServiceInterFace::class,
            OrderService::class
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
