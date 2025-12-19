@extends('app')

@section('content')
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center justify-content-center"
                style="background-image: url( {{ asset('asset/img/slider/slider_bg_1.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">
                                    <span>Program Studi</span><br>Informatika
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Mencetak Generasi Maju, Menuju Generasi
                                    Emas.</p>
                                <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span
                                        class="btn-text">AKREDITASI UNGGUL</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center"
                style="background-image: url( {{ asset('asset/img/slider/2.jpg') }} );">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-12 offset-xl-2">
                            <div class="slider-content slider-content-2 text-center">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">
                                    <span>Universitas Pignatelli Triputra</span>
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Excellence through Unity, People, and
                                    Transformation.</p>
                                <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span
                                        class="btn-text">admit now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center justify-content-center"
                style="background-image: url( {{ asset('asset/img/slider/3.jpg') }} );">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-12">
                            <div class="slider-content slider-content-2">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">
                                    <span>Admition Going On</span><br>Eduara University
                                </h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Sorem ipsum dolor sit amet consectetur
                                    adipisicing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna
                                    aliqua enim ad minime.</p>
                                <button class="theme-btn" data-animation="fadeInUp" data-delay=".6s"><span
                                        class="btn-text">admit now</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- about start -->
    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about-title-section mb-30">
                        <h1>Sejarah Program Studi Informatika</h1>
                        <p>Program Studi (Prodi) Informatika di Universitas Pignatelli Triputra (UPITRA) merupakan bagian
                            dari Fakultas Sains dan Teknologi (FST)
                            yang baru berdiri saat penggabungan ABA Santo Pignatelli dan STIE Santo Pignatelli menjadi
                            UPITRA pada tahun 2022, dengan fokus pada pendekatan industri seperti Data Science dan Rekayasa
                            Perangkat Lunak (termasuk teknologi game) untuk lulusan siap kerja,
                            selaras dengan konsep "Link and Match" kampus dengan industri, terutama Triputra Group. </p>
                        <p>Prodi ini bertujuan menghasilkan lulusan yang kompeten di bidang informatika, mampu bersaing di
                            tingkat nasional dan internasional,
                            serta berkontribusi pada pengembangan ilmu pengetahuan dan teknologi. Dengan kurikulum yang
                            dirancang untuk memenuhi kebutuhan industri,
                            Prodi Informatika UPITRA menekankan pada penguasaan teknologi terkini dan keterampilan praktis
                            yang relevan dengan dunia kerja.</p>

                        <button class="theme-btn blue-bg-border mt-20"><span class="btn-text">Baca
                                Selengkapnya</span></button>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-right-img mb-30">
                        <img src=" {{ asset('asset/img/about/about-right.png') }} " alt="">
                    </div>
                </div>
            </div>



            <div class="row pt-65">
                <div class="col-xl-12 col-lg-12 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Visi</h3>
                            <span>01</span>
                        </div>
                        <div class="feature-text">
                            <p>Program studi yang unggul dalam bidang informatika, berorientasi global, menjunjung tinggi
                                nilai-nilai integritas dan bersemangat kebhinekaan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Misi</h3>
                            <span>02</span>
                        </div>
                        <div class="feature-text">
                            <p>
                                1. Menyelenggarakan program studi informatika secara efektif dan efisien untuk mendukung
                                terlaksananya tri dharma perguruan tinggi.<br>
                                2. Menghasilkan sarjana informatika yang kompeten, kompetitif, memiliki pola pikir logis,
                                sistematis, kedalaman spiritual, kemanusiaan, kemampuan berjejaring, dan profesional dalam
                                memanfatkan bidang ilmu informatika di lingkungan kerja.<br>
                                3. Menghasilkan penelitian yang unggul, kreatif, inovatif dan transformatif bagi masyarakat
                                di bidang informatika.<br>
                                4. Memanfaatkan bidang ilmu informatika yang berdaya guna bagi masyarakat.<br>
                                5. Membangun kerja sama dan mengelola jejaring berkelanjutan dengan dunia pendidikan,
                                masyarakat, pemerintah dan industri untuk mewujudkan keunggulan transformatif di bidang
                                informatika.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-6">
                    <div class="feature-wrapper mb-30">
                        <div class="feature-title-heading">
                            <h3>Tujuan</h3>
                            <span>03</span>
                        </div>
                        <div class="feature-text">
                            <p>
                                1. Berkontribusi dalam memperluas akses pendidikan tinggi yang berkualitas dan terjangkau
                                bagi masyarakat di bidang informatika.<br>
                                2. Menghasilkan sarjana bidang informatika yang bermoral, berintegritas, profesional,
                                bertanggung jawab, dan mampu berkarya dengan ilmu informatika.<br>
                                3. Berkontribusi dalam pengembangan dan penelitian perangkat lunak yang unggul, solutif,
                                inovatif dan transformatif bagi masyarakat dan kehidupan.<br>
                                4. Menerapkan ilmu informatika yang berdaya guna dan berhasil guna bagi masyarakat.<br>
                                5. Menjalin kerja sama dengan dunia pendidikan, masyarakat, pemerintah dan industri yang
                                berkelanjutan, beretika, dan bermanfaat di bidang informatika.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- pengumuman-start -->
    <div id="blog" class="latest_news-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Pengumuman</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Beberapa berita acara terkini pada Program Studi Informatika.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($berita as $bt)
                    @if (trim(strtolower($bt->kategori)) == 'berita')
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="blog-wrapper mb-30">
                                <div class="blog-thumb mb-25">
                                    <a href="news_details.html"><img src=" {{ asset('asset/img/blog/blog_thumb_1.jpg') }}"
                                            alt=""></a>
                                    <span class="blog-category">news</span>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span
                                            class="month">{{ \Carbon\Carbon::parse($bt->tgl_berita)->translatedFormat('M D Y') }}</span>
                                    </div>
                                    <h5><a href="{{ route('berita') }}">{{ $bt->judul }}.</a></h5>
                                    <p>{{ \Illuminate\Support\Str::limit($bt->deskripsi, 80, '...') }}</p>
                                    <div class="read-more-btn">
                                        <button><a href="{{ route('berita') }}">Read more</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- pengumuman-end -->

    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height pt-100 pb-70"
        style="background-image: url( {{ asset('asset/img/courses/courses_bg.png') }} );">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="white-color">Mata Kuliah Program Studi</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="white-color">Beberapa Mata Kuliah yang terdapat pada Program Studi
                                Informatika.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-list">
                <div class="row courses-active">
                    @foreach ($matkul as $mk)
                        <div class="col-xl-12">
                            <div class="courses-wrapper course-radius-none mb-30">
                                {{-- <div class="courses-thumb">
                                    <a href="course_details.html"><img
                                            src=" {{ asset('asset/img/courses/single_courses_thumb_01.jpg') }} "
                                            alt=""></a>
                                </div> --}}
                                {{-- <div class="courses-author">
                                    <img src=" {{ asset('asset/img/courses/coursesauthor1.png') }}  " alt="">
                                </div> --}}
                                <div class="course-main-content clearfix">
                                    <div class="courses-content">
                                        <div class="courses-category-name">
                                            <span>
                                                <a href="#">Semester {{ $mk->semester }}</a>
                                            </span>
                                        </div>
                                        <div class="courses-heading">
                                            <h1><a href="course_details.html">{{ $mk->nama_matkul }}</a></h1>
                                        </div>
                                        <div class="courses-para">
                                            <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque
                                                malesuada.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-wrapper-bottom clearfix">
                                    <div class="courses-icon d-flex f-left">
                                        {{-- <div class="courses-single-icon">
                                            <span class="ti-user"></span>
                                            <span class="user-number">35</span>
                                        </div>
                                        <div class="courses-single-icon">
                                            <span class="ti-heart"></span>
                                            <span class="user-number">35</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-button f-right">
                                        <a href="{{ route('matkul') }}">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
    <!-- team start -->
    <div class="team-area pt-95 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Dosen Program Studi</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Profil Beberapa Dosen Pengampu Program Studi Informatika.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">
                    @foreach ($dosen as $ds)
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team-wrapper mb-30">
                                <div class="team-thumb">
                                    <img src=" {{ asset('asset/img/team/teammember1.jpg') }} " alt="">
                                </div>
                                <div class="team-social-info text-center">
                                    <div class="team-social-para">
                                        <p></p>
                                    </div>
                                    <div class="team-social-icon-list">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-teacher-info text-center">
                                    <h1> {{ $ds->nama_dosen }}</h1>
                                    <h2>NIDN {{ $ds->NIDN }}</h2>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- events start -->
    <div id="events" class="events-area events-bg-height pt-100 pb-95"
        style="background-image: url( {{ asset('asset/img/courses/courses_bg.png') }} )">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="white-color">Agenda</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="white-color">Beberapa agenda acara pada Program Studi Informatika yang
                                akan datang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events-list mb-30">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        @foreach ($berita as $bt)
                            @if (trim(strtolower($bt->kategori)) == 'event')
                                <div class="single-events mb-30">
                                    <div class="events-wrapper">
                                        <div class="events-inner d-flex">
                                            {{-- <div class="events-thumb">
                                                <img src=" {{ asset('asset/foto_berita/'. $bt->gambar) }} "
                                                    alt="" style="">
                                            </div> --}}
                                            <div class="events-text white-bg">
                                                <div class="event-text-heading mb-20">
                                                    <div class="events-calendar text-center f-left">
                                                        <span class="date">
                                                            {{ \Carbon\Carbon::parse($bt->tgl_berita)->format('d') }}
                                                        </span>
                                                        <span
                                                            class="month">{{ \Carbon\Carbon::parse($bt->tgl_berita)->translatedFormat('M Y') }}</span>
                                                    </div>
                                                    <div class="events-text-title clearfix">
                                                        <a href="#">
                                                            <h4> {{ $bt->judul }}</h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-para">
                                                    <p> {{ \Illuminate\Support\Str::limit($bt->deskripsi, 120, '...') }}
                                                    </p>
                                                </div>
                                                <div class="events-speaker">
                                                    <h2>Speaker : <span>Alexzender</span></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- <div class="single-events mb-30">
                            <div class="events-wrapper">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <img src="{{ asset('asset/img/events/eventsthumb2.png') }}" alt="">
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Workshop Marketing</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque
                                                malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Speaker : <span>Alexzender</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="col-xl-6 col-lg-6">
                        <div class="single-events mb-30">
                            <div class="events-wrapper">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <img src="{{ asset('asset/img/events/eventsthumb3.png') }}" alt="">
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Admission Fair 2017</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque
                                                malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Speaker : <span>Alexzender</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-events mb-30">
                            <div class="events-wrapper">
                                <div class="events-inner d-flex">
                                    <div class="events-thumb">
                                        <img src=" {{ asset('asset/img/events/eventsthumb4.png') }} " alt="">
                                    </div>
                                    <div class="events-text white-bg">
                                        <div class="event-text-heading mb-20">
                                            <div class="events-calendar text-center f-left">
                                                <span class="date">25</span>
                                                <span class="month">Sep, 2018</span>
                                            </div>
                                            <div class="events-text-title clearfix">
                                                <a href="#">
                                                    <h4>Learning Spoken English</h4>
                                                </a>
                                                <div class="time-area">
                                                    <span class="ti-time"></span>
                                                    <span class="published-time">05:23 AM - 09:23 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="events-para">
                                            <p>Event is veries fermentum consequat mi fonec has fermentum ellentesque
                                                malesuada.</p>
                                        </div>
                                        <div class="events-speaker">
                                            <h2>Speaker : <span>Alexzender</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="events-view-btn">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="view-all-events text-center">
                            <button class="yewello-btn">view all events<span>&rarr;</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- events end -->
    <!-- testimonials start -->
    <div class="testimonilas-area pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Testimoni</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Beberapa Testimoni dari Alumni Lulusan Universitas Pignatelli
                                Triputra.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonilas-list">
                <div class="row testimonilas-active">

                    @foreach ($testimoni as $ts)
                        <div class="col-xl-12">
                            <div class="testimonilas-wrapper mb-110 ">
                                <div class="testimonilas-heading d-flex">
                                    <div class="testimonilas-author-thumb">
                                        <img src="img/testimonials/testimonilas_author_thumb1.png" alt="">
                                    </div>
                                    <div class="testimonilas-author-title">
                                        <h1>{{ $ts->nm_alumni }}</h1>
                                        <h2>{{ $ts->pekerjaan }}</h2>
                                    </div>
                                </div>
                                <div class="testimonilas-para">
                                    <p>{{ Str::limit($ts->ulasan, 150) }}.</p>
                                </div>
                                <div class="testimonilas-rating">
                                    <ul>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials end -->

    <!-- counter end -->
@endsection
