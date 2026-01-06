@extends('admin.app')
@include('admin.navbar') 

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Mata Kuliah</h1>

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
                <form action="{{ route('admin.matkul.update', $data->id_matkul) }}" method="POST">
                    @csrf
                    @method('PUT') 
                        <div class="mb-3">
                            <label class="form-label">Kode Matkul</label>
                            <input type="text" name="kd_matkul" class="form-control" value="{{ old('kd_matkul', $data->kd_matkul) }}" readonly required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Matkul</label>
                            <input type="text" name="nama_matkul" class="form-control" value="{{ old('nama_matkul', $data->nama_matkul) }}"  required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">SKS</label>
                            <input type="number" name="sks" class="form-control"  value="{{ old('sks', $data->sks) }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Semester</label>
                            <input type="number" name="semester" class="form-control"  value="{{ old('semester', $data->semester) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
