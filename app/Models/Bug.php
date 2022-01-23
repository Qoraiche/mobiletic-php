<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    /** @var string */
    protected $table = 'mantis_bug_table';

    const RESOLVED_STATUS = [80, 90];

    /**
     * @var string[]
     */
    protected $with = ['category'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
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
    public function scopeByCategory(Builder $query, string $category): Builder
    {
        return $query->where('name', $category);
    }

    /**
     * @param Builder $query
     * @param int $status
     * @param $category
     * @return Builder
     */
    public function scopeStatus(Builder $query, int $status): Builder
    {
        return $query->where('status', $status);
    }
}
