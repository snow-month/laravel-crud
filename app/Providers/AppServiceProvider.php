<?php

namespace App\Providers;

use App\Repositories\PositionRepository;
use App\Repositories\PositionRepositoryInterface;
use App\Repositories\WorkerRepository;
use App\Repositories\WorkerRepositoryInterface;
use App\Services\PositionService;
use App\Services\PositionServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PositionRepositoryInterface::class,
            PositionRepository::class);
        $this->app->bind(PositionServiceInterface::class,
            PositionService::class);

        $this->app->bind(WorkerRepositoryInterface::class,
            WorkerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
