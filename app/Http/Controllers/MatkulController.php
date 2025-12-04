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
            'kd_matkul' => 'required|unique:tb_matkul',
            'nama_matkul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        Matkul::create($request->all());

        return redirect()->route('admin.matkul.index')->with('success', 'Data Mata Kuliah Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Matkul::findOrFail($id);
        return view('admin.matkul.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {


        $matkul = Matkul::findOrFail($id);

        $request->validate([
            'kd_matkul' => 'required|unique:tb_matkul, kd_matkul' . $id,
            'nama_matkul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ]);

        $matkul->update($request->all());
        return view('admin.matkul.index')->with('success', 'Data Matkul Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Matkul::destroy($id);
        return redirect()->route('admin.matkul.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
