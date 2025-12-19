@extends('admin.app')
@include('admin.navbar') 

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Berita</h1>

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('admin.berita.update', $data->id_berita) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul', $data->judul) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $data->deskripsi) }}"  required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Berita</label>
                            <input type="date" name="tgl_berita" class="form-control"  value="{{ old('tgl_berita', $data->tgl_berita) }} " required>
                        </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="kategori" id="kategori">
                            <option value="Berita">Berita</option>
                            <option value="Event">Event</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto Berita</label>
                        <input type="file" name="gambar" class="form-control" value="{{old('gambar', $data->gambar)}}">
                    </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
