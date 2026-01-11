<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
class AgendaController extends Controller
{
    public function list_agenda()
    {
        $agenda = Agenda::all();
        return view('layouts.agenda', compact('agenda'));
    }

    

    // Admin Area Controller Methods
    public function index()
    {
        $data = Agenda::all();
        return view('admin.agenda.index', compact('data'));
    }

    public function create()
    {
        return view('admin.agenda.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'judul_agenda' => 'required',
            'slug' => 'required|alpha_dash|unique:tb_agenda,slug',
            'deskripsi' => 'nullable',
            'tanggal_mulai' => 'required|date',
            'lokasi' => 'required',
            'pembicara' => 'required',
            'gambar_poster' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('gambar_poster')) {
            $namaposter = time() . '.' . $request->gambar_poster->extension();
            $request->gambar_poster->move(public_path('storage/agenda'), $namaposter);
            $path = 'agenda/' . $namaposter;
        }

        Agenda::create([
            'judul_agenda' => $request->judul_agenda,
            'slug' => $request->slug,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'lokasi' => $request->lokasi,
            'pembicara' => $request->pembicara,
            'gambar_poster' => $path,
        ]);

        return redirect()->route('admin.agenda.index')->with('success', 'Data Agenda Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Agenda::findOrFail($id);
        return view('admin.agenda.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::findOrFail($id);

        $request->validate([
            'judul_agenda' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required|date',
            'lokasi' => 'required',
            'pembicara' => 'required',
            'gambar_poster' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $agenda->gambar_poster;

        if ($request->hasFile('gambar_poster')) {

            if ($agenda->gambar_poster && file_exists(public_path('storage/' . $agenda->gambar_poster))) {
                unlink(public_path('storage/' . $agenda->gambar_poster));
            }

            $namaposter = time() . '.' . $request->gambar_poster->extension();
            $request->gambar_poster->move(public_path('storage/agenda'), $namaposter);
            $path = 'agenda/' . $namaposter;
        }

        $agenda->update([
            'judul_agenda' => $request->judul_agenda,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'lokasi' => $request->lokasi,
            'pembicara' => $request->pembicara,
            'gambar_poster' => $path,
        ]);

        return redirect()->route('admin.agenda.index')->with('success', 'Data Agenda Berhasil Diperbarui!');
    }

    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        if($agenda->gambar_poster && file_exists(public_path('storage/' . $agenda->gambar_poster))) {
            unlink(public_path('storage/' . $agenda->gambar_poster));
        }
        $agenda->delete();

        return redirect()->route('admin.agenda.index')->with('success', 'Data Agenda Berhasil Dihapus!');
    }
}
