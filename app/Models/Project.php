<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /** @var string */
    protected $table = 'mantis_project_table';

    /** @var string[] */
    //protected $with = ['bugs'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bugs()
    {
        return $this->hasMany(Bug::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeOrderByAnomaliesCount(Builder $query): Builder
    {
        return $query->withCount('bugs')->orderBy('bugs_count', 'desc');
    }

    /**
     * @param Builder $query
     * @param $status
     * @return Builder
     */
    public function scopeBugStatus(Builder $query, $status)
    {
        return $query->withCount(['bugs' => function(Builder $query) {
            $query->where('status', 80);
        }]);
        //return $query->withCount('bugs')->has('', '', '', '', '');
    }
}
