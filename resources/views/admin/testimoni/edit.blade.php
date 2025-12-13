@extends('admin.app')
@include('admin.navbar') 

@section('admin.layouts')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Mata Kuliah</h1>

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('admin.testimoni.update', $data->id_testimoni) }}" method="POST">
                    @csrf
                    @method('PUT') 
                        <div class="mb-3">
                            <label class="form-label">Nama Alumni</label>
                            <input type="text" name="nm_alumni" class="form-control" value="{{ old('nm_alumni', $data->nm_alumni) }}" readonly required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" value="{{ old('pekerjaan', $data->pekerjaan) }}"  required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ulasan</label>
                            <input type="number" name="ulasan" class="form-control"  value="{{ old('ulasan', $data->ulasan) }}" required>
                        </div>


                        <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
