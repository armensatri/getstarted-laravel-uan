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
  Search,
};

use App\View\Components\Backend\Button\{
  ButtonCreate,
};

use App\View\Components\Backend\Table\{
  Th,
  ThAction,
  TdVar,
  TdVarCenter,
  TdImageHover,
  TdVarBg,
  TdAction,
};

use App\View\Components\Backend\Input\{
  Input,
  InputSelect,
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
    Blade::component('search', Search::class);

    // BUTTON
    Blade::component('button-create', ButtonCreate::class);

    // TABLE
    Blade::component('th', Th::class);
    Blade::component('th-action', ThAction::class);
    Blade::component('td-var', TdVar::class);
    Blade::component('td-var-center', TdVarCenter::class);
    Blade::component('td-image-hover', TdImageHover::class);
    Blade::component('td-var-bg', TdVarBg::class);
    Blade::component('td-action', TdAction::class);

    // INPUT
    Blade::component('input', Input::class);
    Blade::component('input-select', InputSelect::class);
  }
}
