@extends('admin.app')
@include('admin.navbar')
@section('admin.layouts')
    <div class="container-fluid mt-4">

        <h1 class="mb-4 text-center text-primary text-semi-bold">Dashboard Admin</h1>
        <div class="row">

            <!-- Agenda -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Data Agenda</h6>
                        <h2 class="fw-bold">{{ $agenda }}</h2>
                    </div>
                </div>
            </div>

            <!-- Berita -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Data Berita</h6>
                        <h2 class="fw-bold">{{ $berita }}</h2>
                    </div>
                </div>
            </div>

            <!-- Dosen -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Data Dosen</h6>
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
