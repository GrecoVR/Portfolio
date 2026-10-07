<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'image',
        'demo_url',
        'github_url',
        'status',
    ];
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
