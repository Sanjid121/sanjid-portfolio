<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'full_name',
        'title',
        'location',
        'phone',
        'email',
        'github_url',
        'playstore_url',
        'cv_url',
        'experience_years',
        'badge_text',
        'bio',
    ];
}
