<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /** @var string */
    protected $table = 'mantis_project_table';

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
}
