<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMemberStaff extends Model
{
    protected $fillable = [
        'team_member_id',
        'name',
        'role',
        'photo',
        'description',
        'sort_order',
    ];

    public function teamMember(): BelongsTo
    {
        return $this->belongsTo(TeamMember::class);
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
