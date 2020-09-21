<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;

use App\Models\Donor;
use App\Observers\DonorObserver;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });

        $this->app->bind("App\Interfaces\DonorInterface", "App\Repositories\DonorRepository");
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Donor::observe(DonorObserver::class);
    }
}
