<?php

namespace App\Models;

use App\Scopes\BugStatusScope;
use App\Scopes\ImprovementStatusScope;
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
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new BugStatusScope);
        static::addGlobalScope(new ImprovementStatusScope);
    }

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
}
