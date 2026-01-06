@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Mata Kuliah</h1>

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
            <form action="{{ route('admin.matkul.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Matkul</label>
                    <input type="text" name="kd_matkul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Matkul</label>
                    <input type="text" name="nama_matkul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="number" name="sks" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <input type="number" name="semester" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
