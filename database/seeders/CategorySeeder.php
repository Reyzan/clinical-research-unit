<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Kunjungan Pemerintah',
                'slug' => 'government-visit',
                'description' => 'Berita tentang kunjungan pejabat pemerintah dan inspeksi ke fasilitas CRU RSCM',
            ],
            [
                'name' => 'Konferensi & Penelitian',
                'slug' => 'conference-research',
                'description' => 'Partisipasi CRU RSCM dalam konferensi ilmiah dan kegiatan penelitian',
            ],
            [
                'name' => 'Penghargaan & Prestasi',
                'slug' => 'achievement-recognition',
                'description' => 'Pencapaian dan penghargaan yang diraih oleh CRU RSCM',
            ],
            [
                'name' => 'Pengembangan Infrastruktur',
                'slug' => 'infrastructure-development',
                'description' => 'Pembangunan dan pengembangan fasilitas serta infrastruktur riset klinis',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
