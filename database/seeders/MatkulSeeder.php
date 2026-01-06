<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matkul;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            ['kd_matkul' => 'RPL-1310', 'nama_matkul' => 'Proses Perangkat Lunak', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Mata kuliah yang berfokus pada proses pengembangan perangkat lunak'],  
            ['kd_matkul' => 'RPL-1305', 'nama_matkul' => 'Jaringan Komunikasi Data', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Mata kuliah dengan topik terkait materi dasar jaringan komunikasi dan implementasi pada perangkat komputer.'],       
            ['kd_matkul' => 'RPL-1312', 'nama_matkul' => 'Arsitektur Industri', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Mata kuliah dengan topik terkait arsitektur pengembangan perangkat lunak secara umum di industri dan proses bisnis perusahaan.'],       
            ['kd_matkul' => 'RPL-1309', 'nama_matkul' => 'Pemrograman Berorientasi Objek', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Topik Mata Kuliah ini mencakup konsep dasar pemrograman berorientasi objek, seperti kelas, objek, pewarisan, polimorfisme, enkapsulasi, dan abstraksi.'],       
            ['kd_matkul' => 'UPT1305', 'nama_matkul' => 'Pengembangan Kepribadian UPITRA DNA', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Mata kuliah yang membahas tentang pengembangan kepribadian sesuai dengan nilai-nilai UPITRA DNA.'],
            ['kd_matkul' => 'RPL-1311', 'nama_matkul' => 'Pemrograman Web Lanjut', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Mata kuliah yang membahas konsep lanjutan dalam pengembangan aplikasi web, termasuk penggunaan framework, keamanan web, dan optimasi kinerja.'],
            ['kd_matkul' => 'RPL-1306', 'nama_matkul' => 'Pemodelan Perangkat Lunak', 'sks' => 3, 'semester' => 3, 'deskripsi' => 'Mata kuliah yang membahas teknik dan metode pemodelan perangkat lunak, termasuk penggunaan diagram UML dan alat pemodelan lainnya.'],
        
        ];

        foreach ($matkul as $mk) {
            Matkul::create($mk);
        }
    }
}
