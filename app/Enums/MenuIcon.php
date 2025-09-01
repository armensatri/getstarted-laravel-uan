<?php

namespace App\Enums;

class MenuIcon
{
  public static function get(String $name)
  {
    $icons = [
      'owner' => 'dashboard.jpg',
      'superadmin' => 'dashboard.jpg',
      'admin' => 'dashboard.jpg',
      'member' => 'dashboard.jpg',

      // ACCOUNT
      'personal' => 'personal.jpg',
      'personal public' => 'personal-public.png'

      // MANAGEDATA

      // MANAGEUSER

      // MANAGEMENU

      // PUBLISHED
    ];

    $fileName = $icons[strtolower($name)] ?? '';

    return "/backend/img/menu/{$fileName}";
  }
}
