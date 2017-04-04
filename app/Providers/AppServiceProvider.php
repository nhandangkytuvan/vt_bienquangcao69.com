<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use App\Term;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        View::share('setting',Setting::first());
        View::share('product',Term::find(1));
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }
}
