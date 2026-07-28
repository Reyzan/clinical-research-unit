<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResearcherTeamMember extends Model
{
    protected $fillable = [
        'researcher_id',
        'name',
        'role',
        'photo',
        'description',
        'sort_order',
    ];

    public function researcher(): BelongsTo
    {
        return $this->belongsTo(Researcher::class);
    }

    public function getPhotoUrlAttribute(): string
    {
        if (! $this->photo) {
            return asset('frontend/images/team/team-01.jpg');
        }

        if (file_exists(public_path($this->photo))) {
            return asset($this->photo);
        }

        return asset('storage/'.$this->photo);
    }
}
