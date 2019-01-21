<?php

namespace App\Providers;

use App\Repositories\Movies\MoviesRepository;
use App\Repositories\Movies\EloquentMovies;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {  
           Schema::defaultStringLength(191);
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind(MoviesRepository::class, EloquentMovies::class );
    }
}
