<?php

namespace App\Models\Manageuser;

use App\Traits\Models\HasRandomUrl;
use App\Traits\Models\HasSluggable;
use App\Traits\Models\HasSearchable;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasRandomUrl, HasSearchable, HasSluggable;

  protected $table = 'roles';

  protected $sluggable = 'url';

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

  protected $sField = [
    'name'
  ];

  public function getRouteKeyName()
  {
    return 'url';
  }
}
