<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    /** @var string  */
    protected $table = 'mantis_bug_table';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    /**
    public function getStatusAttribute($value)
    {
        return ($value == 80 || $value == 90) ? 'Résolu' : 'En cours';
    }
     */
}
