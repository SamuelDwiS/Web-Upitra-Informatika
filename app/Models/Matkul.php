<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = "tb_matkul";
    protected $primaryKey = 'id_matkul';

    protected $fillable = [
        'kd_matkul',
        'nama_matkul',
        'sks',
        'semester',
    ];


}
