<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;

use App\Http\Controllers\Auth\{
  LoginController,
  RegisterController,
  LogoutController
};

/*---------------------------------------------------------------
| ROUTE AUTH
|---------------------------------------------------------------*/

Route::group(['middleware' => ['guest']], function () {
  Route::controller(LoginController::class)->group(
    function () {
      Route::get('/login', 'index')->name('login');
      Route::post('/login', 'store')->name('login.store');
    }
  );

  Route::controller(RegisterController::class)->group(
    function () {
      Route::get('/register', 'index')->name('register');
      Route::post('/register', 'store')->name('register.store');
    }
  );
});

Route::group(['middleware' => ['auth']], function () {
  Route::controller(LogoutController::class)->group(
    function () {
      Route::post('/logout', 'logout')->name('logout');
    }
  );
});

/*---------------------------------------------------------------
| ROUTE FRONTEND
|---------------------------------------------------------------*/

Route::get('/', [HomeController::class, 'index'])
  ->name('home');

/*---------------------------------------------------------------
| ROUTE DRAFT
|---------------------------------------------------------------*/


/*---------------------------------------------------------------
| ROUTE SLUG
|---------------------------------------------------------------*/


/*---------------------------------------------------------------
| ROUTE BACKEND
|---------------------------------------------------------------*/

Route::get('/dashboard', [DashboardController::class])
  ->name('dashboard')->middleware('auth');
