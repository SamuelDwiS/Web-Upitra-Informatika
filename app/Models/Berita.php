<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Berita extends Model
{

    protected $table = "tb_berita";
    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'author',
        'published_at',
        'id_kategori',
        'gambar',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
