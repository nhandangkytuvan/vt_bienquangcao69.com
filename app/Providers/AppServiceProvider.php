<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use App\Term;
use App\Post;
use App\Slide;
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
        View::share('posts_sidebar',Post::where('post_group',1)->latest()->limit(5)->get());
        View::share('slides',Slide::get());
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
