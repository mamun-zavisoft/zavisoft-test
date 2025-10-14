<?php

namespace App\Providers;

use App\Interfaces\OtpRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\OtpRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(OtpRepositoryInterface::class, OtpRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
