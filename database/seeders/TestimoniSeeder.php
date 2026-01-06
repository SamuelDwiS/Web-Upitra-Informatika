<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimoni;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimoni = [
            ['nm_alumni' => 'Ahmad Fauzi', 'pekerjaan' => 'Software Engineer', 'ulasan' => 'Kuliah di UPITRA Informatika memberikan saya dasar yang kuat dalam pengembangan perangkat lunak. Dosen-dosennya sangat berpengalaman dan selalu mendukung mahasiswa untuk berkembang.'],
            ['nm_alumni' => 'Siti Nurhaliza', 'pekerjaan' => 'Data Analyst', 'ulasan' => 'Program studi ini sangat relevan dengan kebutuhan industri saat ini. Saya belajar banyak tentang analisis data dan alat-alat modern yang digunakan di dunia kerja.'],
            ['nm_alumni' => 'Budi Santoso', 'pekerjaan' => 'Network Administrator', 'ulasan' => 'Fasilitas laboratorium yang lengkap dan kurikulum yang up-to-date membuat saya siap menghadapi tantangan di bidang jaringan komputer. Saya sangat merekomendasikan UPITRA Informatika.'],
        ];

        foreach($testimoni as $tm) {
            \App\Models\Testimoni::create($tm);
        }
    }
}
