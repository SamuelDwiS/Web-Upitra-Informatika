<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function list_dosen()
    {

        $dosen = Dosen::paginate(6);
        return view('layouts.dosen', compact('dosen'));
    }

    public function index()
    {
        $data = Dosen::all();
        return view('admin.dosen.index', compact('data'));
    }

    public function create()
    {
        return view('admin.dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIDN' => 'required',
            'nama_dosen' => 'required',
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $namafoto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('storage/dosen'), $namafoto);
            $path = 'dosen/' . $namafoto;
        }

        Dosen::create([
            'NIDN' => $request->NIDN,
            'nama_dosen' => $request->nama_dosen,
            'spesialisasi' => $request->spesialisasi,
            'foto' => $path,
        ]);

        return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Dosen::findOrFail($id);
        return view('admin.dosen.edit', compact('data'));
    }

    public function update(Request $request, $data)
    {
        $dosen = Dosen::findOrFail($data);

        $request->validate([
            'NIDN' => 'required|unique:tb_dosen,NIDN,' . $dosen->id_dosen . ',id_dosen',
            'nama_dosen' => 'required',
            'spesialisasi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // default pakai foto lama
        $namaFoto = $dosen->foto;

        // jika upload foto baru
        if ($request->hasFile('foto')) {

            if ($dosen->foto && file_exists(public_path('storage/' . $dosen->foto))) {
                unlink(public_path('storage/' . $dosen->foto));
            }

            $file = $request->file('foto');
            $namaFile = time() . '.' . $file->extension();
            $file->move(public_path('storage/dosen'), $namaFile);
            $namaFoto = 'dosen/' . $namaFile;
        }

        $dosen->update([
            'NIDN' => $request->NIDN,
            'nama_dosen' => $request->nama_dosen,
            'spesialisasi' => $request->spesialisasi,
            'foto' => $namaFoto, 
        ]);

        return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen Berhasil Diupdate!');
    }


    public function destroy($id)
    {   
        $dosen = Dosen::findOrFail($id);
        if($dosen->foto && file_exists(public_path('storage/' . $dosen->foto))) {
            unlink(public_path('storage/' . $dosen->foto));
        }
        $dosen->delete();
        return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen berhasil dihapus!');
    }
}
