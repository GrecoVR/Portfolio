<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'professional_title',
        'short_description',
        'profile_image',
        'cv_file',
    ];
}
