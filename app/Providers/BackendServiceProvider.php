<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use App\View\Components\Backend\Sidebar\{
  Menu,
  Submenu,
};

class BackendServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }

  public function boot(): void
  {
    // SIDEBAR
    Blade::component('menu', Menu::class);
    Blade::component('submenu', Submenu::class);
  }
}
