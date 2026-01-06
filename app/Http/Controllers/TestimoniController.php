<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function list_testimoni()
    {
        $testimoni = Testimoni::all();
        return view('layouts.home', compact('testimoni'));
    }


    // Admin Area Controller Methods
    public function index()
    {
        $data = Testimoni::all();
        return view('admin.testimoni.index', compact('data'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nm_alumni' => 'required',
            'pekerjaan' => 'required',
            'ulasan' => 'required',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto_profil')) {
            $namafoto = time() . '.' . $request->foto_profil->extension();
            $request->foto_profil->move(public_path('storage/testimoni'), $namafoto);
            $path = 'testimoni/' . $namafoto;
        }

        Testimoni::create([
            'nm_alumni' => $request->nm_alumni,
            'pekerjaan' => $request->pekerjaan,
            'ulasan' => $request->ulasan,
            'foto_profil' => $path,
        ]);

        return redirect()->route('admin.testimoni.index')->with('success', 'Data Ulasan Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);

        $request->validate([
            'nm_alumni' => 'required|unique:tb_testimoni,nm_alumni,' . $testimoni->id_testimoni . ',id_testimoni',
            'pekerjaan' => 'required',
            'ulasan' => 'required',
            'foto_profil' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // default pakai foto lama
        $namaFoto = $testimoni->foto_profil;

        // jika upload foto baru
        if ($request->hasFile('foto_profil')) {

            if ($testimoni->foto_profil && file_exists(public_path('storage/' . $testimoni->foto_profil))) {
                unlink(public_path('storage/' . $testimoni->foto_profil));
            }

            $file = $request->file('foto_profil');
            $namaFile = time() . '.' . $file->extension();
            $file->move(public_path('storage/testimoni'), $namaFile);
            $namaFoto = 'testimoni/' . $namaFile;
        }

        $testimoni->update([
            'nm_alumni' => $request->nm_alumni,
            'pekerjaan' => $request->pekerjaan,
            'ulasan' => $request->ulasan,
            'foto_profil' => $namaFoto,
        ]);
        return redirect()->route('admin.testimoni.index')->with('success', 'Data Testimoni Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        if($file = Testimoni::find($id)){
            if ($file->foto_profil && file_exists(public_path('storage/' . $file->foto_profil))) {
                unlink(public_path('storage/' . $file->foto_profil));
            }
        }
        $testimoni->delete();
        return redirect()->route('admin.testimoni.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
