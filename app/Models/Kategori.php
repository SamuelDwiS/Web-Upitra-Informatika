<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "tb_kategori";
    protected $primaryKey = 'id_kategori';

    protected $fillable = [
        'kategori',
        'slug',
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_kategori', 'id_kategori');
    }
}
