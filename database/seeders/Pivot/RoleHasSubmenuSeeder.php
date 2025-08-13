<?php

namespace Database\Seeders\Pivot;

use App\Models\Managemenu\Submenu;
use App\Models\Manageuser\Role;
use Illuminate\Database\Seeder;

class RoleHasSubmenuSeeder extends Seeder
{
  public function run(): void
  {
    $roles = Role::whereIn('name', [
      'owner',
      'superadmin',
      'admin',
      'member',
    ])->get()->keyBy('name');

    $submenus = Submenu::whereIn('name', [
      // OWNER
      'owner',

      // SUPERADMIN
      'superadmin',

      // ADMIN
      'admin',

      // MEMBER
      'member',

      // ACCOUNT
      'personal',
      'personal public',

      // MANAGEDATA
      'data',
      'visitor',
      'access',
      'statistic',

      // MANAGEUSER
      'users',
      'roles',
      'permissions',

      // MANAGEMENU
      'menus',
      'submenus',

      // PIBLISHED
      'statuses',
    ])->get()->keyBy('name');

    $roleHasSubmenus = [
      'owner' => [
        // OWNER
        'owner',

        // SUPERADMIN
        // 'superadmin',

        // ADMIN
        // 'admin',

        // MEMBER
        // 'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        'data',
        'visitor',
        'access',
        'statistic',

        // MANAGEUSER
        'users',
        'roles',
        'permissions',

        // MANAGEMENU
        'menus',
        'submenus',

        // PIBLISHED
        'statuses',
      ],

      'superadmin' => [
        // OWNER
        // 'owner',

        // SUPERADMIN
        'superadmin',

        // ADMIN
        // 'admin',

        // MEMBER
        // 'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        'data',
        'visitor',
        'access',
        'statistic',

        // MANAGEUSER
        'users',
        'roles',
        'permissions',

        // MANAGEMENU
        'menus',
        'submenus',

        // PIBLISHED
        'statuses',
      ],

      'admin' => [
        // OWNER
        // 'owner',

        // SUPERADMIN
        // 'superadmin',

        // ADMIN
        'admin',

        // MEMBER
        // 'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        // 'data',
        // 'visitor',
        // 'access',
        // 'statistic',

        // MANAGEUSER
        // 'users',
        // 'roles',
        // 'permissions',

        // MANAGEMENU
        // 'menus',
        // 'submenus',

        // PIBLISHED
        // 'statuses',
      ],

      'member' => [
        // OWNER
        // 'owner',

        // SUPERADMIN
        // 'superadmin',

        // ADMIN
        // 'admin',

        // MEMBER
        'member',

        // ACCOUNT
        'personal',
        'personal public',

        // MANAGEDATA
        // 'data',
        // 'visitor',
        // 'access',
        // 'statistic',

        // MANAGEUSER
        // 'users',
        // 'roles',
        // 'permissions',

        // MANAGEMENU
        // 'menus',
        // 'submenus',

        // PIBLISHED
        // 'statuses',
      ],
    ];
  }
}
