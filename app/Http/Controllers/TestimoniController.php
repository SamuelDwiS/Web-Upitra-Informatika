<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function list_testimoni()
    {
        // $matkul = Matkul::all();
        $testimoni = Testimoni::all();
        return view('layouts.home', compact('testimoni'));
    }

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
        ]);

        Testimoni::create($request->all());

        return redirect()->route('admin.testimoni.index')->with('success', 'Data Ulasan Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Testimoni::findOrFail($id);
        return view('admin.testimoni.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $matkul = Testimoni::findOrFail($id);

        $request->validate([
            'nm_alumni' => 'required|unique:tb_testimoni,nm_alumni' . $id,
            'pekerjaan' => 'required',
            'ulasan' => 'required',
        ]);

        $matkul->update([
            'nm_alumni' => $request->nm_alumni,
            'pekerjaan' => $request->pekerjaan,
            'ulasan' => $request->ulasan,
        ]);
        return redirect()->route('admin.testimoni.index')->with('success', 'Data Testimoni Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        Testimoni::destroy($id);
        return redirect()->route('admin.testimoni.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
