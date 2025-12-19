<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        if ($request->hasFile('gambar')) {
            $namaGambar = time() . '.' . $request->gambar->extension();
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
            'judul' => [
                'required',
                Rule::unique('tb_berita', 'judul')
                    ->ignore($berita->id_berita, 'id_berita')
            ],
            'deskripsi' => 'required',
            'tgl_berita' => 'required',
            'kategori' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // default: pakai gambar lama
        $nama_gambar = $berita->gambar;

        // jika upload gambar baru
        if ($request->hasFile('gambar')) {

            // hapus gambar lama
            if ($berita->gambar && file_exists(public_path('asset/foto_berita/' . $berita->gambar))) {
                unlink(public_path('asset/foto_berita/' . $berita->gambar));
            }

            $file = $request->file('gambar');
            $nama_gambar = time() . '.' . $file->extension();
            $file->move(public_path('asset/foto_berita'), $nama_gambar);
        }

        // update data
        $berita->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tgl_berita' => $request->tgl_berita,
            'kategori' => $request->kategori,
            'gambar' => $nama_gambar,
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Data Berita Berhasil Diupdate!');
    }


    public function destroy($id)
    {
        Berita::destroy($id);
        return redirect()->route('admin.berita.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
