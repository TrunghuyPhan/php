<?php

namespace App\Providers;

use App\main_menu;
use Illuminate\Support\ServiceProvider;
use App\ProductTypes;
use Illuminate\Support\Facades\DB;

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
        // view()->composer('users.layout', function ($view1) {
        //     $menu=main_menu::all();
        //     $view1->with('menu',$menu);
        // });

        view()->composer('users.layout', function ($view) {
            $Phone=DB::table('types_product')->where('id_parents','=',1)->select('*')
            ->get();
            $Tablet=DB::table('types_product')->where('id_parents','=',2)->select('*')
            ->get();
            $Watch=DB::table('types_product')->where('id_parents','=',3)->select('*')
            ->get();
            $view->with('Phone',$Phone);
            $view->with('Tablet',$Tablet);
            $view->with('Watch',$Watch);
        });
    }
}
