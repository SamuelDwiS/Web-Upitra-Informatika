<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Testimoni;
use App\Models\Matkul;
use App\Models\Kategori;
use App\Models\Agenda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        $matkul = Matkul::paginate(6);
        $berita = Berita::with('kategori')->whereHas('kategori', function ($query) {
            $query->where('kategori', 'Berita');
        })->latest()->limit(3)->get();
        $pengumuman = Berita::with('kategori')->whereHas('kategori', function ($query) {
            $query->where('kategori', 'Pengumuman');
        })->latest()->limit(3)->get();
        $agenda = Agenda::latest()->limit(3)->get();
        $dosen = Dosen::paginate(6);
        return view('layouts.home', compact('testimoni', 'matkul', 'berita', 'pengumuman', 'agenda', 'dosen'));
    }
}
