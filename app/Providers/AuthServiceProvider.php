<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('edit-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });
        Gate::define('delete-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });
        Gate::define('edit-media', function ($user, $media) {
            return $user->id == $media->user_id;
        });
        Gate::define('delete-media', function ($user, $media) {
            return $user->id == $media->user_id;
        });
        Gate::define('edit-term', function ($user, $term) {
            return $user->id == $term->user_id;
        });
        Gate::define('delete-term', function ($user, $term) {
            if($user->id == $term->user_id||$user->user_group=='admin'){
                return true;
            }else{
                return false;
            }
        });
    }
}
