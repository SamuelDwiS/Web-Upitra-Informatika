<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    public function list_berita()
    {
        $berita = Berita::all();
        return view('layouts.berita', compact('berita'));
    }

    public function index()
    {
        $data = Berita::all();
        return view('admin.berita.index', compact('data'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        'tgl_berita' => 'required',
        'kategori' => 'required',
        'gambar' => 'image|mimes:png,jpg,|max:2048',
        ]);


        $namaGambar = null;
        if($request->hasFile('gambar'))
        {
            $namaGambar = time().'.'. $request->gambar->extension();
            $request->gambar->move(public_path('asset/foto_berita'), $namaGambar);
        }
        Berita::create([
         'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'tgl_berita' => $request->tgl_berita,
        'kategori' => $request->kategori,
        'gambar' => $namaGambar,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Data Mata Kuliah Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
        'judul' => 'required|unique:tb_berita,judul' .$id,
        'deskripsi' => 'required',
        'tgl_berita' => 'required',
        'kategori' => 'required',
        'gambar' => 'img|mimes:png,jpg,|max:2048',
        ]);

        $nama_gambar = $berita->gambar; 

        if($request->hasFile('foto')){
            if ($berita->gambar && $berita->gambar != 'default.png') {
                unlink(public_path('asset/foto_berita/'. $berita->gambar));
            }
            
        $file = $request->file('foto');
        $nama_gambar = time().'.'.$file->extension();
        $file->move(public_path('asset/foto_berita'), $nama_gambar);
        }
        $berita->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tgl_berita' => $request->tgl_berita,
            'kategori' => $request->kategori,
            'gambar' => $request->gambar,
        ]);
        
        return view('admin.berita.index')->with('success', 'Data Berita Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('admin.berita.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
