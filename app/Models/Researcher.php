<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Researcher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'research_group_id',
        'name',
        'slug',
        'title',
        'email',
        'photo',
        'bio',
        'education',
        'publications',
        'google_scholar_url',
        'linkedin_url',
        'orcid_url',
        'unit_description',
        'sort_order',
    ];

    protected $casts = [
        'education' => 'array',
        'publications' => 'array',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Researcher $researcher) {
            if (! is_null($researcher->sort_order)) {
                $conflict = static::where('sort_order', $researcher->sort_order)->exists();
                if ($conflict) {
                    static::where('sort_order', '>=', $researcher->sort_order)->increment('sort_order');
                }
            }
        });

        static::updating(function (Researcher $researcher) {
            if ($researcher->isDirty('sort_order') && ! is_null($researcher->sort_order)) {
                $conflict = static::where('id', '!=', $researcher->id)
                    ->where('sort_order', $researcher->sort_order)
                    ->exists();
                if ($conflict) {
                    static::where('id', '!=', $researcher->id)
                        ->where('sort_order', '>=', $researcher->sort_order)
                        ->increment('sort_order');
                }
            }
        });
    }

    public function researchGroup(): BelongsTo
    {
        return $this->belongsTo(ResearchGroup::class);
    }

    public function teamMembers(): HasMany
    {
        return $this->hasMany(ResearcherTeamMember::class)->orderBy('sort_order');
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
