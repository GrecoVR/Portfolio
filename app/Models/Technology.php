<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'name',
        'section',
        'slug',
        'icon',
    ];
    
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
