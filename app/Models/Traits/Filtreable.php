<?php

namespace App\Models\Traits;

use App\Http\Filters\FilterInterface;
use App\Http\Requests\BlogPost\FilterRequest;
use Illuminate\Database\Eloquent\Builder;


trait Filtreable
{
    /**
     * @param Builder $builder
     * @param FilterInterface $filter
     *
     * @return Builder
     */
    public function scopeFilter(Builder $builder, FilterInterface $filter)
    {
        $filter->apply($builder);
        return $builder;
    }
}
