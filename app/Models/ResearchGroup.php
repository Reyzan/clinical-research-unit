<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResearchGroup extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'accent_color',
        'description',
        'sort_order',
    ];

    public function researchers(): HasMany
    {
        return $this->hasMany(Researcher::class);
    }

    public function getLogoUrlAttribute(): ?string
    {
        if (! $this->logo) {
            return null;
        }

        if (file_exists(public_path($this->logo))) {
            return asset($this->logo);
        }

        return asset('storage/'.$this->logo);
    }

    public function getAccentColorOrDefaultAttribute(): string
    {
        if ($this->accent_color) {
            return $this->accent_color;
        }

        return match ($this->slug) {
            'infeksi' => '#E04E4E',
            'metabolik' => '#E0A040',
            'neuro' => '#5A56C7',
            'hemato-onk' => '#2E9E9E',
            default => '#7A7A7A',
        };
    }
}
