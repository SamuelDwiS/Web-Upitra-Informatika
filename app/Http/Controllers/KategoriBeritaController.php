<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Kategori;

class KategoriBeritaController extends Controller
{


    public function show($slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $berita = $kategori->berita()->get();

        return view('kategori_berita', compact('kategori', 'berita'));
    }

    public function agendaMendatang($berita)
    {
        $berita::where('tgl_agenda', '>=', now())->orderBy('tgl_agenda', 'asc')->get();
        return view('kategori_agenda', compact('kategori', 'berita'));
    }

    public function edit($id)
    {
        $data = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('data'));
    }
}
