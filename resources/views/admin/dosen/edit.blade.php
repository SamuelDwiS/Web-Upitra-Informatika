@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Data Dosen</h1>

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('admin.dosen.update', $data->id_dosen) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">ID Dosen</label>
                            <input type="text" name="id_dosen" class="form-control" value="{{ old('id_dosen', $data->id_dosen) }}" readonly required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">NIDN</label>
                            <input type="text" name="NIDN" class="form-control" value="{{ old('NIDN', $data->NIDN) }}"  required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Dosen</label>
                            <input type="text" name="nama_dosen" class="form-control"  value="{{ old('nama_dosen', $data->nama_dosen) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto Dosen</label>
                            <input type="file" name="foto" class="form-control"  value="{{ old('foto', $data->foto) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
