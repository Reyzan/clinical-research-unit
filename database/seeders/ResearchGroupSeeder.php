<?php

namespace Database\Seeders;

use App\Models\ResearchGroup;
use Illuminate\Database\Seeder;

class ResearchGroupSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Infeksi',
                'slug' => 'infeksi',
                'accent_color' => '#E04E4E',
                'description' => 'Riset penyakit infeksi tropis dan emerging infectious diseases.',
                'sort_order' => 1,
            ],
            [
                'name' => 'Metabolik',
                'slug' => 'metabolik',
                'accent_color' => '#E0A040',
                'description' => 'Riset gangguan metabolik termasuk diabetes, obesitas, dan dislipidemia.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Neuro',
                'slug' => 'neuro',
                'accent_color' => '#5A56C7',
                'description' => 'Riset penyakit neurologis dan ilmu saraf klinis.',
                'sort_order' => 3,
            ],
            [
                'name' => 'HematoOnk',
                'slug' => 'hemato-onk',
                'accent_color' => '#2E9E9E',
                'description' => 'Riset hematologi dan onkologi medis.',
                'sort_order' => 4,
            ],
        ];

        foreach ($groups as $group) {
            ResearchGroup::updateOrCreate(['slug' => $group['slug']], $group);
        }
    }
}
