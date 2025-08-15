<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{
  LoginController,
  LogoutController,
  RegisterController,
};

Route::group(
  [
    'middleware' => [
      'guest'
    ]
  ],
  function () {
    Route::controller(LoginController::class)->group(
      function () {
        Route::get('/authenticate/login', 'index')
          ->name('login');
        Route::post('/authenticate/login', 'store')
          ->name('login.store');
      }
    );

    Route::controller(RegisterController::class)->group(
      function () {
        Route::get('/authenticate/register', 'index')
          ->name('register');
        Route::post('/authenticate/register', 'store')
          ->name('register.store');
      }
    );
  }
);

Route::group(
  [
    'middleware' => [
      'auth'
    ]
  ],
  function () {
    Route::post('/authenticate/logout', [
      LogoutController::class,
      'index'
    ])->name('logout');
  }
);
