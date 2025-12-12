@section('admin.navbar')
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"></div>
                        Dashboard
                    </a>

                    {{-- Navbar Berita --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#gabungBerita"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"></div>
                        Berita
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="gabungBerita" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.berita.index') }} ">Daftar Berita</a>
                            <a class="nav-link" href=" {{ route('admin.berita.create') }} ">Tambah Berita</a>
                        </nav>
                    </div>


                    {{-- Navbar Mata Kuliah --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#gabungMatkul"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"></div>
                        Mata Kuliah
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="gabungMatkul" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.matkul.index') }}">Daftar Mata Kuliah</a>
                            <a class="nav-link" href="{{ route('admin.matkul.create') }}">Tambah Mata Kuliah</a>
                        </nav>
                    </div>

                    {{-- Navbar Dosen --}}
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#gabungDosen"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"></div>
                        Dosen
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="gabungDosen" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.dosen.index') }}">Daftar Dosen</a>
                            <a class="nav-link" href="{{ route('admin.dosen.create') }}">Tambah Dosen</a>
                        </nav>
                    </div>

                </div>
            </div>
        </nav>
    </div>
@endsection
