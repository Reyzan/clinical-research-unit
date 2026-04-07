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

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (TeamMember $member) {
            if (!is_null($member->sort_order)) {
                $conflict = static::where('sort_order', $member->sort_order)->exists();
                if ($conflict) {
                    static::where('sort_order', '>=', $member->sort_order)->increment('sort_order');
                }
            }
        });

        static::updating(function (TeamMember $member) {
            if ($member->isDirty('sort_order') && !is_null($member->sort_order)) {
                $conflict = static::where('id', '!=', $member->id)
                    ->where('sort_order', $member->sort_order)
                    ->exists();
                if ($conflict) {
                    static::where('id', '!=', $member->id)
                        ->where('sort_order', '>=', $member->sort_order)
                        ->increment('sort_order');
                }
            }
        });
    }

    public function getImageUrlAttribute(): string
    {
        if (!$this->image) {
            return asset('frontend/images/team/team-01.jpg');
        }

        // Legacy seeded files live directly in public/; new uploads go to storage/app/public/
        if (file_exists(public_path($this->image))) {
            return asset($this->image);
        }

        return asset('storage/' . $this->image);
    }

    public function getCvFileUrlAttribute(): ?string
    {
        if (!$this->cv_file) {
            return null;
        }

        if (file_exists(public_path($this->cv_file))) {
            return asset($this->cv_file);
        }

        return asset('storage/' . $this->cv_file);
    }
}
