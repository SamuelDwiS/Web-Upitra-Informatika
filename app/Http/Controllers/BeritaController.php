<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Pagination\PaginationServiceProvider;

use function Symfony\Component\Clock\now;

class BeritaController extends Controller
{

    public function list_berita()
    {
        $berita = Berita::whereHas('kategori', function ($query) {
            $query->where('slug', 'berita');
        })->latest()->paginate(2);
        $beritaTerbaru = Berita::whereHas('kategori', function ($query) {
            $query->where('slug', 'berita');
        })->latest()->limit(5)->get();
        return view('layouts.berita.berita', compact('berita', 'beritaTerbaru'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail()->get();
        $beritaLain = Berita::where('slug', '!=', $slug)->latest()->limit(5)->get();
        return view('layouts.berita.detail-berita', compact('berita', 'beritaLain'));
    }

    public function list_pengumuman()
    {
        $pengumuman = Berita::WhereHas('kategori', function ($query) {
            $query->where('slug', 'pengumuman');
        })->get();
        return view('layouts.pengumuman', compact('pengumuman'));
    }


    // Admin Area Controller Methods
    public function index()
    {
        $data = Berita::all();
        return view('admin.berita.index', compact('data'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.berita.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $slug = Str::slug($request->slug);
        $checkSlug = Berita::where('slug', $slug)->exists();

        if ($checkSlug) {
            $slug = $slug . '-' . time();
        }

        $rules = [
            'judul' => 'required|unique:tb_berita,judul',
            'slug' => 'required|alpha_dash|unique:tb_berita,slug',
            'id_kategori' => 'required|exists:tb_kategori,id_kategori',
            'gambar' => 'required|image|mimes:png,jpg|max:2048',
        ];

        $kategoriPengumuman = Kategori::where('slug', 'pengumuman')->first();
        $kategoriBerita = Kategori::where('slug', 'berita')->first();

        $request->validate($rules);
        $path = null;
        if ($request->hasFile('gambar')) {

            // $path = $request->file('gambar')->store('berita', 'public');

            $file = $request->file('gambar');
            $namaGambar = time() . '.' . $file->extension();

            if ($kategoriPengumuman && $request->id_kategori == $kategoriPengumuman->id_kategori) {
                //  kategori pengumuman, simpan di folder 'pengumuman'
                $file->move(public_path('storage/pengumuman'), $namaGambar);
                $path = 'pengumuman/' . $namaGambar;
            } else if ($kategoriBerita && $request->id_kategori == $kategoriBerita->id_kategori) {
                // kategori berita, simpan di folder 'berita'
                $file->move(public_path('storage/berita'), $namaGambar);
                $path = 'berita/' . $namaGambar;
            }
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'author' => $request->author ?? 'Admin Upitra',
            'published_at' => now(),
            'id_kategori' => $request->id_kategori,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Data Mata Kuliah Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.berita.edit', compact('data', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->judul);
        $berita = Berita::findOrFail($id);
        $kategoriPengumuman = Kategori::where('slug', 'pengumuman')->first();
        $kategoriBerita = Kategori::where('slug', 'berita')->first();

        $rules = [
            'judul' => [
                'required',
                Rule::unique('tb_berita', 'judul')
                    ->ignore($berita->id_berita, 'id_berita')
            ],
            'slug' => [
                'required',
                Rule::unique('tb_berita', 'slug')
                    ->ignore($berita->id_berita, 'id_berita')
            ],
            'deskripsi' => 'required',
            'author' => 'required',
            'id_kategori' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];

        $request->validate($rules);
        // default: pakai gambar lama
        $namaGambar = $berita->gambar;

        // jika upload gambar baru
        if ($request->hasFile('gambar')) {
            if ($berita->gambar && file_exists(public_path('storage/' . $berita->gambar))) {
                unlink(public_path('storage/' . $berita->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '.' . $file->extension();

            if ($kategoriPengumuman && $request->id_kategori == $kategoriPengumuman->id_kategori) {
                $file->move(public_path('storage/pengumuman'), $namaFile);
                $namaGambar = 'pengumuman/' . $namaFile;
            } elseif ($kategoriBerita && $request->id_kategori == $kategoriBerita->id_kategori) {
                $file->move(public_path('storage/berita'), $namaFile);
                $namaGambar = 'berita/' . $namaFile;
            }
        }

        // update data
        $berita->update([
            'judul' => $request->judul,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'author' => $request->author ?? 'Admin Upitra',
            'published_at' => now(),
            'id_kategori' => $request->id_kategori,
            'gambar' => $namaGambar,
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Data Berita Berhasil Diupdate!');
    }


    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && file_exists(public_path('storage/' . $berita->gambar))) {
            unlink(public_path('storage/' . $berita->gambar));
        }
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
