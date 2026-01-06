<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            ['NIDN' => '0123456789','nama_dosen' => 'Dr. Andi Wijaya, M.Kom', 'spesialisasi' => 'Rekayasa Perangkat Lunak', 'foto' => 'andi_wijaya.jpg'],
            ['NIDN' => '9876543210','nama_dosen' => 'Prof. Siti Aminah, M.T.', 'spesialisasi' => 'Jaringan Komputer', 'foto' => 'siti_aminah.jpg'],
            ['NIDN' => '1234567890','nama_dosen' => 'Dr. Budi Santoso, M.Sc.', 'spesialisasi' => 'Keamanan Siber', 'foto' => 'budi_santoso.jpg'],
            ['NIDN' => '0987654321','nama_dosen' => 'Ir. Rina Lestari, M.Eng.', 'spesialisasi' => 'Sistem Informasi', 'foto' => 'rina_lestari.jpg'],

        ];

        foreach ($dosen as $dsn) {
            Dosen::create($dsn);
        }
    }
}
