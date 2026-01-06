<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $kategori = [
            ['kategori' => 'Berita', 'slug' => 'berita'],
            ['kategori' => 'Pengumuman', 'slug' => 'pengumuman'],
        ];

        foreach($kategori as $kt) {
            \App\Models\Kategori::create($kt);
        }
    }
}
