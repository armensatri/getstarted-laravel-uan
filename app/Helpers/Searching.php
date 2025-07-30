<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Builder;

class Searching
{
  public static function applySearch(
    Builder $query,
    ?string $search,
    array $fields,
    array $relations,
  ): void {
    if (empty($search)) {
      return;
    }

    $query->where(function (Builder $query) use (
      $search,
      $fields,
      $relations,
    ) {
      foreach ($fields as $field) {
        $query->orWhere($field, 'like', '%' . $search . '%');
      }

      foreach ($relations as $relation => $relationFields) {
        $query->orWhereHas($relation, function (Builder $q) use (
          $search,
          $relationFields,
        ) {
          foreach ((array) $relationFields as $field) {
            $q->orWhere($field, 'like', '%' . $search . '%');
          }
        });
      }
    });
  }
}
