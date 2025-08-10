<?php

namespace App\Models\Manageuser;

use App\Traits\Searchable;
use App\Traits\HasRandomUrl;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasRandomUrl, Searchable;

  protected $table = 'users';

  protected $fillable = [
    'name',
    'username',
    'email',
    'password',
    'image',
    'role_id',
    'status_on_of',
    'last_seen',
    'url'
  ];

  protected array $sField = [
    'name'
  ];

  protected array $sRelation = [
    'role' => 'name',
  ];

  protected $hidden = [
    'password'
  ];

  protected function casts()
  {
    return [
      'password' => 'hashed'
    ];
  }

  public function getRouteKeyName()
  {
    return 'url';
  }

  public function role()
  {
    return $this->belongsTo(Role::class);
  }

  public function statusOnOf()
  {
    $online = $this->status_on_of;
    $color = $online ? 'green' : 'red';

    return [
      'bg' => "bg-{$color}-200",
      'text' => "text-{$color}-800",
      'statusOnOf' => $online ? 'online' : 'offline',
    ];
  }
}
