<?php

namespace App\Models\xcatatan;

use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Model;

class SearchableDiModel extends Model
{
  use Searchable;

  protected array $sFields = [
    // field utama model
    'name',
    'username'
  ];

  protected array $sRelations = [
    // jika (1) field di dalam relasi
    'role' => 'name',

    // jika (banyak) field di dalam relasi
    'profile' => [
      'bio',
      'location'
    ]
  ];
}
