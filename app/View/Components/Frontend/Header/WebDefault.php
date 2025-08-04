<?php

namespace App\View\Components\Frontend\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebDefault extends Component
{
  public $route;
  public $img;
  public $alt;
  public $description;

  public function __construct(
    $route,
    $img,
    $alt,
    $description,
  ) {
    $this->route = $route;
    $this->img = $img;
    $this->alt = $alt;
    $this->description = $description;
  }

  public function render(): View|Closure|string
  {
    return view('components.frontend.header.web-default');
  }
}
