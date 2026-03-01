<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsArticles = [
            [
                'title' => 'Menteri Kesehatan RI Tinjau Laboratorium CRU RSCM dan BB Genomik',
                'slug' => 'menteri-kesehatan-ri-tinjau-laboratorium-cru-rscm-dan-bb-genomik',
                'content' => '<p>Jakarta (11/09) – Menteri Kesehatan Republik Indonesia melakukan kunjungan kerja ke Laboratorium Clinical Research Unit (CRU) Rumah Sakit Cipto Mangunkusumo (RSCM) dan Balai Besar Biomedis dan Genomik Kesehatan (BB Genomik), Jakarta.</p>

<p>Dalam kesempatan ini, Menteri Kesehatan didampingi oleh jajaran Direksi RSCM, Direktur Jenderal Pelayanan Kesehatan Kementerian Kesehatan RI, serta Kepala Balai Besar Biomedis dan Genomik.</p>

<p>Kunjungan ini menjadi momentum penting dalam upaya memperkuat riset klinis, biomedis, dan genomik sebagai pilar strategis transformasi sistem kesehatan nasional.</p>

<p>Laboratorium CRU RSCM merupakan fasilitas unggulan yang mendukung berbagai penelitian klinis berkualitas tinggi, sementara BB Genomik berperan vital dalam pengembangan ilmu pengetahuan dan penelitian klinis berbasis genomik untuk meningkatkan layanan kesehatan di Indonesia.</p>',
                'featured_image' => 'frontend/images/news/minister-visit-cru-rscm.jpg',
                'status' => 'published',
                'published_at' => '2025-09-19 23:12:00',
                'meta_title' => 'Menteri Kesehatan RI Tinjau Laboratorium CRU RSCM dan BB Genomik',
                'meta_description' => 'Menteri Kesehatan Republik Indonesia melakukan kunjungan kerja ke Laboratorium Clinical Research Unit (CRU) RSCM dan BB Genomik Jakarta untuk memperkuat riset klinis nasional.',
                'category_slug' => 'government-visit',
            ],
            [
                'title' => 'Partisipasi CRU RSCM dalam Jakarta Endocrine Meeting 2025',
                'slug' => 'partisipasi-cru-rscm-dalam-jakarta-endocrine-meeting-2025',
                'content' => '<p>Clinical Research Unit (CRU) RSUPN Dr. Cipto Mangunkusumo turut ambil bagian dalam acara Jakarta Endocrine Meeting (JEM) 2025 yang berlangsung pada 14–15 Juni 2025 di Novotel Jakarta Mangga Dua.</p>

<p>Acara ilmiah tahunan ini menjadi ajang kolaborasi profesional di bidang endokrinologi, termasuk dokter, peneliti, dan tenaga kesehatan lainnya.</p>

<p>Partisipasi CRU RSCM dalam kegiatan ini menjadi wujud komitmen RSCM dalam mendukung pengembangan ilmu pengetahuan dan penelitian klinis, khususnya dalam bidang endokrin dan metabolik. Melalui booth edukatif dan diskusi aktif, CRU RSCM turut berbagi informasi terkait riset klinis serta peran pentingnya dalam peningkatan layanan kesehatan berbasis bukti.</p>

<p>Keterlibatan ini diharapkan dapat memperkuat jejaring kolaborasi antar institusi, sekaligus membuka peluang inovasi dalam layanan endokrinologi yang berkelanjutan.</p>

<p class="hashtags">#rscm #endokrin #riset #penelitian #inovasi #jem2025</p>',
                'featured_image' => 'frontend/images/news/jakarta-endocrine-meeting-2025.jpg',
                'status' => 'published',
                'published_at' => '2025-06-15 14:30:00',
                'meta_title' => 'Partisipasi CRU RSCM dalam Jakarta Endocrine Meeting 2025',
                'meta_description' => 'CRU RSUPN Dr. Cipto Mangunkusumo berpartisipasi dalam Jakarta Endocrine Meeting 2025 untuk berbagi riset klinis dan memperkuat kolaborasi di bidang endokrinologi.',
                'category_slug' => 'conference-research',
            ],
            [
                'title' => 'RSCM raih Penghargaan Clinical Research Unit (CRU) RS Vertikal Kemenkes dengan Penelitian Klinik Terbanyak',
                'slug' => 'rscm-raih-penghargaan-cru-penelitian-klinik-terbanyak',
                'content' => '<p>RSCM raih Penghargaan Clinical Research Unit (CRU) RS Vertikal Kemenkes dengan Penelitian Klinik Terbanyak pada perayaan HKN ke-61 di Balai Kartini, Jakarta.</p>

<p>Capaian ini menjadi bukti komitmen RSCM dalam memperkuat riset klinis sebagai fondasi pelayanan kesehatan yang unggul dan berkelanjutan.</p>

<p>Terima kasih atas dedikasi seluruh tim yang terus menghadirkan inovasi untuk negeri.</p>

<p class="hashtags">#HKN61 #RSCM #RisetKlinis #KemenkesRI</p>',
                'featured_image' => 'frontend/images/news/cru-award-most-research.jpg',
                'status' => 'published',
                'published_at' => '2025-12-07 10:00:00',
                'meta_title' => 'RSCM Raih Penghargaan CRU dengan Penelitian Klinik Terbanyak',
                'meta_description' => 'RSCM meraih penghargaan sebagai Clinical Research Unit RS Vertikal Kemenkes dengan Penelitian Klinik Terbanyak pada perayaan HKN ke-61.',
                'category_slug' => 'achievement-recognition',
            ],
            [
                'title' => 'Peluncuran Indonesia Clinical Research Center (INA-CRC) di RSCM',
                'slug' => 'peluncuran-indonesia-clinical-research-center-ina-crc',
                'content' => '<p>Pada tanggal 16 Oktober 2024, Indonesia Clinical Research Center (INA-CRC) resmi diluncurkan di RSUPN Dr. Cipto Mangunkusumo Hospital, menandai tonggak penting bagi infrastruktur penelitian klinis Indonesia.</p>

<p>INA-CRC didirikan sebagai pusat riset klinis terpadu yang bertujuan meningkatkan kualitas dan kapasitas penelitian klinis di Indonesia sesuai dengan standar internasional. Dengan fasilitas modern dan tim peneliti berpengalaman, INA-CRC siap mendukung berbagai studi klinis mulai dari fase awal hingga lanjutan.</p>

<p>Kehadiran INA-CRC diharapkan dapat mempercepat pengembangan terapi dan intervensi kesehatan berbasis bukti, serta meningkatkan daya saing Indonesia dalam penelitian klinis global.</p>

<p>Peluncuran ini melibatkan berbagai stakeholder termasuk Kementerian Kesehatan, akademisi, dan mitra industri farmasi untuk memastikan ekosistem riset klinis yang berkelanjutan.</p>',
                'featured_image' => 'frontend/images/news/ina-crc-launch.jpg',
                'status' => 'published',
                'published_at' => '2024-10-16 09:00:00',
                'meta_title' => 'Peluncuran Indonesia Clinical Research Center (INA-CRC) di RSCM',
                'meta_description' => 'Indonesia Clinical Research Center (INA-CRC) resmi diluncurkan di RSCM sebagai tonggak penting pengembangan infrastruktur penelitian klinis nasional.',
                'category_slug' => 'infrastructure-development',
            ],
        ];

        foreach ($newsArticles as $articleData) {
            // Extract category slug
            $categorySlug = $articleData['category_slug'];
            unset($articleData['category_slug']);

            // Create news article
            $news = News::create($articleData);

            // Attach category
            $category = Category::where('slug', $categorySlug)->first();
            if ($category) {
                $news->categories()->attach($category->id);
            }
        }
    }
}
