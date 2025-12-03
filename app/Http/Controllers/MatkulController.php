<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        $data = Matkul::all();
        return view('admin.matkul.index', compact('data'));
    }

    public function create()
    {
        return view('admin.matkul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_matkul' => 'required|unique:matkul',
            'nama_matkul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        Matkul::created($request->all());

        return redirect()->route('/matkul')->with('success', 'Data Mata Kuliah Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $matkul = Matkul::findOrAll($id);
        return view('admin.matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $matkul = Matkul::findOrAll($id);

        $request->validate([
            'kd_matkul' => 'required|unique:matkul, kd_matkul' . $id,
            'nama_matkul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        $matkul->updated($request->all());

        return view('admin.matkul.index')->with('success', 'Data Matkul Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Matkul::destroy($id);
        return redirect()->route('matkul.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
