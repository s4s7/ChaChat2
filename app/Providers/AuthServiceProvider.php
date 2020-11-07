<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 理事(お題を投稿できる)
        Gate::define('post_auth_true', function ($user) {
            return ($user->post_auth == true);
        });

        // 理事以外(お題は投稿できない)
        Gate::define('post_auth_false', function ($user) {
            return ($user->post_auth == false);
        });
    }
}
