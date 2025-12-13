@extends('admin.app')
@include('admin.navbar')

@section('admin.layouts')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Testimoni</h1>

    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.testimoni.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Alumni</label>
                    <input type="text" name="nm_alumni" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ulasan</label>
                    <input type="text" name="ulasan" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
