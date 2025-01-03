<?php

namespace App\Modules\User\Filters;
use Illuminate\Database\Eloquent\Builder;

class IsActive
{
 /**
      * Apply the filter to the query.
      *
      * @param  Builder  $query
      * @param  bool     $value
      * @return Builder
      */
     public function apply(Builder $query, bool $value): Builder
     {
         return $query->where('is_active', $value);
     }
}