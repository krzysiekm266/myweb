<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('store_image',fn(User $user) =>   Auth::check() && $user->roles->contains(fn($role,$key)=> $key == Role::IS_ADMIN)  );
        Gate::define('delete_image',fn(User $user) =>  Auth::check() && $user->roles->contains(fn($role,$key)=> $key == Role::IS_ADMIN) );

        //
    }
}
