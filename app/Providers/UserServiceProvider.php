<?php

namespace App\Providers;

use App\Domain\User\http\Interfaces\UserRepositoryInterface;
use App\Domain\User\http\Interfaces\UserServiceInterface;
use App\Domain\User\Repositories\UserRepository;
use App\Domain\User\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            UserServiceInterface::class,
            function ($app) {
                return new UserService(
                    $app->make(UserRepositoryInterface::class)
                );
            }
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
