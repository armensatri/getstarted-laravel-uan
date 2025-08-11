<?php

namespace App\Traits\Models;

use App\Helpers\Searching;
use Illuminate\Database\Eloquent\Builder;

trait HasSearchable
{
  public function scopeSearch(Builder $query, array $filters): void
  {
    if (!property_exists($this, 'sFields')) {
      throw new \Exception(
        'Property $sFields harus didefinisikan di model.'
      );
    }

    $fields = $this->sField;
    $relations = $this->sRelation ?? [];

    $query->when(
      $filters['search'] ?? false,
      function (Builder $query, $search) use ($fields, $relations) {
        Searching::applySearch($query, $search, $fields, $relations);
      }
    );
  }
}
