<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\noti_user;
use App\categories;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('Admin/Layout/header',function($view){
            $mess = noti_user::where('status',0) ->get();
            $view->with(['mess'=>$mess]); 
        });
        view()->composer('Viewer/Layout/header',function($view){
            $danhmuc = categories::all();
            $view->with(['danhmuc'=>$danhmuc]); 
        });
        
    }
}
