<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'tb_agenda';
    protected $primaryKey = 'id_agenda';
    protected $fillable = [
        'judul_agenda',
        'slug',
        'deskripsi',
        'tanggal_mulai',
        'lokasi',
        'pembicara',
        'gambar_poster',
        'published_at',
    ];
}
