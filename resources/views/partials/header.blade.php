 <!-- header-start -->
    <header id="home">
        <div class="header-area">
            <!-- header-top -->
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex">
                                <div class="logo">
                                    <a href="index.html">
                                        {{-- <img src="{{asset('asset/logo.png') }}" alt=""> --}}
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-top -->
            <!-- header-bottom -->
            {{-- <div class="">
                <img src="{{asset('asset/logo_upitra.png') }}" alt="">
            </div> --}}
            <div class="header-bottom-area header-sticky" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="header-bottom">
                             <img src="{{asset('asset/logo_upitra.png')}}" alt="" width="75" height="auto">
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="header-bottom-icon f-right">

                            </div>
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="{{route('home')}}">Profil</a>
                                            {{-- <ul class="submenu">
                                                <li>
                                                    <a href="index.html">Home style 1</a>
                                                </li>
                                                <li>
                                                    <a href="index_2.html">Home style 2</a>
                                                </li>
                                                <li>
                                                    <a href="index_3.html">Home style 3</a>
                                                </li>
                                            </ul> --}}
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
                                                    <a href="events_02.html">Pengumuman</a>
                                                </li>
                                                {{-- <li>
                                                    <a href="event_details.html">Events Details</a>
                                                </li>
                                                <li>
                                                    <a href="shop_pages.html">Shop</a>
                                                </li> --}}
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
                                                {{-- <li>
                                                    <a href="course_03.html">Courses 03</a>
                                                </li>
                                                <li>
                                                    <a href="course_details.html">Course Details</a>
                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://pmb.upitra.ac.id/">JALUR PENDAFTARAN</a>
                                            {{-- <ul class="submenu">
                                                <li>
                                                    <a href="grid_news.html">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="standard_blog.html">Blog Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="news_details.html">Blog Details</a>
                                                </li>
                                            </ul> --}}
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
