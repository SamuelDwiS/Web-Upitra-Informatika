@extends('admin.app')
@include('admin.navbar')
@section('admin.layouts')
    <div class="container-fluid mt-4">
        <div class="row">

            <!-- Berita -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Total Berita</h6>
                        <h2 class="fw-bold">{{ $berita }}</h2>
                    </div>
                </div>
            </div>

            <!-- Dosen -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Total Dosen</h6>
                        <h2 class="fw-bold">{{ $dosen }}</h2>
                    </div>
                </div>
            </div>

            <!-- Mata Kuliah -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Mata Kuliah</h6>
                        <h2 class="fw-bold">{{ $matkul }}</h2>
                    </div>
                </div>
            </div>

            <!-- Testimoni -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Testimoni</h6>
                        <h2 class="fw-bold">{{ $testimoni }}</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
