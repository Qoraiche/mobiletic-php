<?php

namespace App\Scopes;

use App\Models\Bug;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BugStatusScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->withCount(['bugs as resolved_bug_status_count' => function (Builder $query) {
            $query->whereHas('category', function (Builder $builder) {
                $builder->where('name', 'Bug');
            })->whereIn('status', Bug::RESOLVED_STATUS);
        }]);

        $builder->withCount(['bugs as ongoing_bug_status_count' => function (Builder $query) {
            $query->whereHas('category', function (Builder $builder) {
                $builder->where('name', 'Bug');
            })->whereNotIn('status', Bug::RESOLVED_STATUS);
        }]);
    }
}
