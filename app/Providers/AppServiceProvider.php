<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Helpers\Cart;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $file =  app_path('Helpers/function.php');
        // if($file){
        //     require_once ($file);
        // }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        view()->composer("*", function ($view) {
            $view->with([
                'cart' => new Cart()
            ]);
        });
        // view()->composer("*", function ($view) {
        //     $view->with([
        //         'categories' => new Category()
        //     ]);
        // });
    }
}
