@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Testimoni</h1>

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
                <form action="{{ route('admin.testimoni.update', $data->id_testimoni) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama Alumni</label>
                        <input type="text" name="nm_alumni" class="form-control"
                            value="{{ old('nm_alumni', $data->nm_alumni) }}" readonly required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control"
                            value="{{ old('pekerjaan', $data->pekerjaan) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ulasan</label>
                        <textarea name="ulasan" class="form-control" id="ulasan" cols="20" rows="5">{{ old('ulasan', $data->ulasan) }}</textarea>
                    </div>

                    <small>Preview Foto Profil</small>
                    @if ($data->foto_profil)
                        <img src="{{ asset('storage/' . $data->foto_profil) }}" alt="preview" width="150"
                            style="display:block;margin-bottom:10px;">
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Foto Profil</label>
                        <input type="file" name="foto_profil" class="form-control"
                            value="{{ old('foto_profil', $data->foto_profil) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
