<?php

namespace Database\Seeders\Pivot;

use Illuminate\Database\Seeder;
use App\Models\Manageuser\Role;
use App\Models\Manageuser\Permission;

class RoleHasPermissionSeeder extends Seeder
{
  public function run(): void
  {
    $roles = collect([
      'owner',
      'superadmin',
      'admin',
      'member'
    ])->mapWithKeys(fn($roleName) => [
      $roleName = Role::firstOrCreate(
        ['name' => $roleName],
        ['guard_name' => 'web']
      ),
    ]);

    $roleHasPermissions = [
      'owner' => [],

      'superadmin' => [],

      'admin' => [],

      'member' => [],
    ];

    foreach ($roleHasPermissions as $roleName => $permissions) {
      if (empty($permissions)) {
        continue;
      }

      $permissionIds = Permission::whereIn(
        'name',
        $permissions
      )->pluck('id');

      $roles[$roleName]->permissions()->sync($permissionIds);
    }
  }
}
