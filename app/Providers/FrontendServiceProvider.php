<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

use App\View\Components\Frontend\Header\{
  WebDefault,
  WebMenuUtama,
  WebExploreLainnya,
  MobileDefault,
  MobileMenuUtama,
  MobileExploreLainnya,
};

class FrontendServiceProvider extends ServiceProvider
{
  public function register(): void
  {
    //
  }

  public function boot(): void
  {
    // HEADER
    Blade::component('web-default', WebDefault::class);
    Blade::component('web-menu-utama', WebMenuUtama::class);
    Blade::component('web-explore-lainnya', WebExploreLainnya::class);
    Blade::component('mobile-default', MobileDefault::class);
    Blade::component('mobile-menu-utama', MobileMenuUtama::class);
    Blade::component('mobile-explore-lainnya', MobileExploreLainnya::class);
  }
}
