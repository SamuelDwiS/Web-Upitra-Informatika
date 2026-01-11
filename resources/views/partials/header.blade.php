 <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header-bottom">
                            <a href="{{route('home')}}">
                             <img src="{{asset('asset/logo_upitra.png')}}" alt="" width="75" height="auto">
                            
                            </a>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">

                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="{{route('home')}}">Profil</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{route('about')}}">Tentang UPITRA</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('about')}}">Fakultas Sains dan Teknologi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">AKADEMIK</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{route('matkul')}}">Mata Kuliah</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('dosen') }}">Dosen Pengampu</a>
                                                </li>
                                                {{-- <li>
                                                    <a href="advisors_details.html">Advisors Details</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">FAQ</a>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#about">BERITA</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{route('berita')}}">Berita</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('agenda')}}">Agenda</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('biaya_r')}}">BIAYA KULIAH</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{route('biaya_r')}}#beasiswa">Beasiswa</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('biaya_r')}}">Reguler</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://pmb.upitra.ac.id/">JALUR PENDAFTARAN</a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="{{ route('biaya_r')}}">Reguler</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('biaya_r')}}">Beasiswa</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('biaya_r')}}">Beasiswa KIP-Kuliah</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->
