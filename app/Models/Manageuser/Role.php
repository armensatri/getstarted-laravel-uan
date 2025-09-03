<?php

namespace App\Models\Manageuser;

use App\Models\Managemenu\Menu;
use App\Models\Manageuser\User;
use App\Models\Managemenu\Submenu;
use App\Traits\Models\HasRandomUrl;
use App\Traits\Models\HasSluggable;
use App\Traits\Models\HasSearchable;
use App\Models\Manageuser\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasRandomUrl, HasSearchable, HasSluggable;

  protected $table = 'roles';

  protected $fillable = [
    'sr',
    'name',
    'slug',
    'bg',
    'text',
    'description',
    'guard_name',
    'url'
  ];

  protected $sFields = [
    'name'
  ];

  public function getRouteKeyName()
  {
    return 'url';
  }

  public function users()
  {
    return $this->hasMany(User::class);
  }

  public function menus()
  {
    return $this->belongsToMany(
      Menu::class,
      'role_has_menu',
      'role_id',
      'menu_id'
    );
  }

  public function submenus()
  {
    return $this->belongsToMany(
      Submenu::class,
      'role_has_submenu',
      'role_id',
      'submenu_id'
    );
  }

  public function permissions()
  {
    return $this->belongsToMany(
      Permission::class,
      'role_has_permission',
      'role_id',
      'permission_id'
    );
  }
}
