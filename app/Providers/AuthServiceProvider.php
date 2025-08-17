<?php
namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; // ✅ правильный импорт


class AuthServiceProvider extends ServiceProvider

{
    protected $policies = [

    ];
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('verification', function (User $user) {
           return is_null($user->verification);
        });

        Gate::define('verification-store', function (User $user) {
            return $user->verification === '1';
        });


    }

}
