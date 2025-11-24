@extends('admin.app')
@section('admin.navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Admin Panel</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">

                <!-- Data Berita -->
                <li class="nav-item">
                    <a class="nav-link" href="#berita">Data Berita Kampus</a>
                </li>

                <!-- Mata Kuliah -->
                <li class="nav-item">
                    <a class="nav-link" href="#matkul">Data Mata Kuliah</a>
                </li>

                <!-- Dosen -->
                <li class="nav-item">
                    <a class="nav-link" href="#dosen">Data Dosen</a>
                </li>

            </ul>

            <!-- Akun admin -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
@endsection
