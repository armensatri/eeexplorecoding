<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }

  public function boot(): void
  {
    Gate::before(
      fn($user) =>
      $user->hasRole('Owner') || $user->hasRole('Super Admin')
        ? true : null
    );
  }
}
