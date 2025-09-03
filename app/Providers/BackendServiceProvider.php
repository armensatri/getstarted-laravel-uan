<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Backend\Pagination\Pagination;

use App\View\Components\Backend\Sidebar\{
  Menu,
  Submenu,
};

use App\View\Components\Backend\Breadcrumb\{
  Slash,
  BreadcrumbIcon,
  BreadcrumbName,
};

use App\View\Components\Backend\TableHeader\{
  Description,
  Refresh,
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

    // PAGINATION
    Blade::component('pagination', Pagination::class);

    // BREADCRUMB
    Blade::component('slash', Slash::class);
    Blade::component('breadcrumb-icon', BreadcrumbIcon::class);
    Blade::component('breadcrumb-name', BreadcrumbName::class);

    // TABLE HEADER
    Blade::component('description', Description::class);
    Blade::component('refresh', Refresh::class);
  }
}
