<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Technology;
use App\Models\Image;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'demo_url',
        'github_url',
        'status',
        'is_featured',
    ];
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function coverImage()
    {
        return $this->hasOne(Image::class)->where('is_cover', true);
    }
}


