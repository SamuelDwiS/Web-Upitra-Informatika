<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    protected $table = "tb_berita";
    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tgl_berita',
        'kategori',
        'gambar',
    ];
}
