@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Dosen</h1>

        <div class="card mb-4">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.dosen.update', $data->id_dosen) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">NIDN</label>
                        <input type="text" name="NIDN" class="form-control" value="{{ old('NIDN', $data->NIDN) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Dosen</label>
                        <input type="text" name="nama_dosen" class="form-control"
                            value="{{ old('nama_dosen', $data->nama_dosen) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Spesialisasi</label>
                        <input type="text" name="spesialisasi" class="form-control"
                            value="{{ old('spesialisasi', $data->spesialisasi) }}" required>
                    </div>

                    <small>Preview Foto</small>
                        @if ($data->foto)
                            <img src="{{ asset('storage/' . $data->foto) }}" alt="preview"
                                 width="150" style="display:block;margin-bottom:10px;">
                        @endif

                    <div class="mb-3">
                        <label class="form-label">Foto Dosen</label>
                        <input type="file" name="foto" class="form-control" value="{{ old('foto', $data->foto) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
