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

        $namafoto = null;
        if($request ->hasFile('foto'))
        {
            $namafoto = time().'.'. $request->foto->extension();
            $request->foto->move(public_path('asset/foto_dosen'), $namafoto);
        }

         Dosen::create([
        'NIDN' => $request->NIDN,
        'nama_dosen' => $request->nama_dosen,
        'foto' => $namafoto,
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
            'NIDN' => 'required',
            'nama_dosen' => 'required',
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);



        $nama_foto = $dosen->foto; // Ambil nama foto lama

        if($request->hasFile('foto')){
        // Hapus foto lama jika ada dan bukan foto default
            if ($dosen->foto && $dosen->foto != 'default.png') {
                unlink(public_path('asset/foto_dosen/'. $dosen->foto));
            }

        $file = $request->file('foto');
        $nama_foto = time().'.'.$file->extension();
        $file->move(public_path('asset/foto_dosen'), $nama_foto);
        }


        $dosen->update([
            'NIDN' => $request->NIDN,
            'nama_dosen' => $request->nama_dosen,
            'foto' => $request->nama_foto,
        ]);
        return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Dosen::destroy($id);
        return redirect()->route('admin.dosen.index')->with('success', 'Data Dosen berhasil dihapus!');
    }
}
