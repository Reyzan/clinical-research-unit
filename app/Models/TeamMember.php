<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'subtitle',
        'bio',
        'image',
        'email',
        'location',
        'nationality',
        'languages',
        'speciality',
        'education',
        'experience',
        'publications',
        'cv_file',
        'sort_order',
    ];

    protected $casts = [
        'education'    => 'array',
        'experience'   => 'array',
        'publications' => 'array',
    ];

    public function getImageUrlAttribute(): string
    {
        if (!$this->image) {
            return asset('frontend/images/team/team-01.jpg');
        }

        if (str_starts_with($this->image, 'frontend/')) {
            return asset($this->image);
        }

        return asset('storage/' . $this->image);
    }
}
