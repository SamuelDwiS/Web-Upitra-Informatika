<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "tb_dosen";
    protected $primaryKey = 'id_dosen';

    protected $fillable = [
        'NIDN',
        'nama_dosen',
        'spesialisasi',
        'deskripsi',
        'foto',
    ];
}
