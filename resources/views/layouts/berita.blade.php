@extends('app')

@section('content')
    <!-- Add your site or application content here -->

    <!-- slider-start -->
    <div class="slider-area">
        <div class="pages-title">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center"
                style="background-image: url( {{ asset('asset/img/bg/others_bg.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Berita Kampus</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <div class="course-details-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="single-blog blog-wrapper blog-list blog-details blue-blog mb-40">
                        @foreach ($berita as $bt)

                            <div class="single-blog-main-content mb-30">
                                <div class="blog-thumb mb-35">
                                    <a href="news_details.html"><img src="img/blog/news_details_thumb_02.jpg"
                                            alt=""></a>
                                    <span class="blog-text-offer">{{ $bt->kategori }}</span>
                                </div>
                                <div class="blog-content news-content">
                                    <div class="blog-meta news-meta">
                                        <span>{{ $bt->tgl_berita }}</span>
                                    </div>
                                    <div style="width:100%; overflow:hidden;">
                                        <img src="{{ asset('asset/foto_berita/' . $bt->gambar) }}" alt=""
                                            style="width:100%; height:auto; object-fit:cover; border-radius:4px;">
                                        <h5 style="font-size:20px; margin-top:10px;">{{ $bt->judul }}</h5>
                                        <p>{{ $bt->deskripsi }}</p>
                                    </div>
                                    <a href="news_details.html" class="blog-read-more-btn">Baca Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="course-pagination mt-10 mb-30" aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-left"></span></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="courses-details-sidebar-area">
                        <div class="widget mb-40 white-bg">
                            <div class="sidebar-form">
                                <form action="#">
                                    <input placeholder="Search course" type="text">
                                    <button type="submit">
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Kategori</h4>
                            <div class="widget-link">
                                <ul class="sidebar-link">
                                    <li>
                                        <a href="#">Busines Studies</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#">CSE Engineering</a>
                                        <span>07</span>
                                    </li>
                                    <li>
                                        <a href="#">Lerning English</a>
                                        <span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Civil Engineering</a>
                                        <span>05</span>
                                    </li>
                                    <li>
                                        <a href="#">Islamic Studies</a>
                                        <span>02</span>
                                    </li>
                                    <li>
                                        <a href="#">Banking Management</a>
                                        <span>09</span>
                                    </li>
                                    <li>
                                        <a href="#">Social Science</a>
                                        <span>13</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Berita Terbaru</h4>
                            <div class="sidebar-rc-post">
                                <ul>
                                    <li>
                                        @foreach ($berita as $bt)
                                            <div class="sidebar-rc-post-main-area d-flex mb-20">
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html">
                                                        <img src="img/courses/rcourses_thumb01.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h4>
                                                        <a href="blog-details.html"> {{ $bt->judul }}</a>
                                                    </h4>
                                                    <div class="widget-advisors-name">
                                                        <span>Advisor : <span class="f-500">Marcelo</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget mb-40 widget-padding white-bg">
                            <h4 class="widget-title">Recent Course</h4>
                            <div class="widget-tags clearfix">
                                <ul class="sidebar-tad clearfix">
                                    <li>
                                        <a href="#">CSE</a>
                                    </li>
                                    <li>
                                        <a href="#">Business</a>
                                    </li>
                                    <li>
                                        <a href="#">Study</a>
                                    </li>
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">Education</a>
                                    </li>
                                    <li>
                                        <a href="#">Engineering</a>
                                    </li>
                                    <li>
                                        <a href="#">Advisor</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end news-details-->
@endsection
