<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
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
