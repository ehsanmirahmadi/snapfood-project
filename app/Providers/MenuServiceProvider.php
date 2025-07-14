<?php

namespace App\Providers;


use App\Domain\Menu\http\Interfaces\MenuServiceInterface;
use App\Domain\Menu\http\Services\MenuService;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            MenuServiceInterface::class,
            MenuService::class
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
