<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Testimoni;
use App\Models\Matkul;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        $matkul = Matkul::paginate(6);
        $berita = Berita::paginate(6);
        return view('layouts.home', compact('testimoni', 'matkul', 'berita'));
    }
}
