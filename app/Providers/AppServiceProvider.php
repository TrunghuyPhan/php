<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductTypes;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('users.layout', function ($view) {
            $loai_sp=ProductTypes::all();
            $view->with('loai_sp',$loai_sp);
        });
    }
}
