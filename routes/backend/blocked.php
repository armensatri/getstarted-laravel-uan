<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Blocked\BlockedController;

Route::controller(BlockedController::class)->group(
  function () {
    Route::get('/registrasi/di/batasi', 'registrasiDiBatasi')
      ->name('registrasi.di.batasi');
  }
);
