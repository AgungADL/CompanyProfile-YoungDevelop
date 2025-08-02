<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Pengembangan Website Bisnis & UMKM',
                'desc' => 'Ciptakan kehadiran online yang kuat dengan website profesional. Tingkatkan visibilitas, penjualan, dan brand awareness bisnis Anda.',
                'icon' => '<svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-1.343 3-3s-1.343-3-3-3m0 6v-6"></path></svg>', // Ikon bumi/web
                'points' => [
                    'Desain Responsif Kustom',
                    'Integrasi E-commerce (Opsional)',
                    'Sistem Manajemen Konten (CMS)',
                    'Optimasi SEO Dasar',
                ]
            ],
            [
                'title' => 'Desain & Pengembangan Website Startup',
                'desc' => 'Luncurkan startup Anda dengan website inovatif dan skalabel. Fokus pada fungsionalitas inti dan pengalaman pengguna superior.',
                'icon' => '<svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h4c0 1.25-.75 2.25-2 3H8l-1-1v-3l-2 1V7l2 1V3l-2-1H3L1 2v20"></path></svg>', // Ikon roket/inovasi
                'points' => [
                    'Pengembangan MVP Cepat',
                    'Arsitektur Skalabel',
                    'UI/UX Inovatif',
                    'Integrasi API Pihak Ketiga',
                ]
            ],
            [
                'title' => 'Asistensi Proyek Digital Akademis',
                'desc' => 'Dapatkan dukungan ahli untuk proyek kuliah terkait pengembangan web/aplikasi. Raih hasil terbaik dengan bimbingan profesional.',
                'icon' => '<svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5A6.5 6.5 0 003 11.5c0 1.655.286 3.208.792 4.607M12 6.253c1.168-.826 2.754-1.333 4.5-1.333A6.5 6.5 0 0121 11.5c0 1.655-.286 3.208-.792 4.607m-4.5-4.607a7.487 7.487 0 00-4.5 0"></path></svg>', // Ikon buku/pengetahuan
                'points' => [
                    'Bimbingan Teknis & Kode',
                    'Pembuatan Aplikasi Web (Parsial)',
                    'Desain UI/UX Tugas Akhir',
                    'Debugging & Optimasi',
                ]
            ],
            [
                'title' => 'Pengembangan Website Institusi Pendidikan',
                'desc' => 'Bangun portal informasi resmi yang profesional dan mudah diakses untuk sekolah, universitas, atau lembaga pendidikan Anda.',
                'icon' => '<svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v5m-5 0h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>', // Ikon bangunan/kampus
                'points' => [
                    'Desain Informasi Institusi',
                    'Modul Berita & Pengumuman',
                    'Galeri Aktivitas & Fasilitas',
                    'Integrasi Kalender Akademik',
                    'Halaman Kontak & Lokasi',
                ]
            ],
        ];

        $caseStudies = [
            [
                'title' => 'Website Company Profile: "YoungDevelop"',
                'image' => 'LogoYD_Dark_HD.svg',
                'challenge' => 'Startup teknologi YoungDevelop membutuhkan representasi online yang modern untuk menarik investor dan klien potensial.',
                'solution' => 'Kami merancang dan mengembangkan website company profile responsif dengan desain minimalis, informasi layanan terperinci, dan formulir kontak interaktif.',
                'result' => 'Peningkatan kredibilitas digital, menarik 15% lebih banyak prospek, dan berhasil mendapatkan pendanaan awal setelah peluncuran.'
            ],
        ];

        return view('services', compact('services', 'caseStudies'));
    }
}
