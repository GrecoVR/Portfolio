<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'project_id',
        'path',
        'alt_text',
        'is_cover',
        'sort_order',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
