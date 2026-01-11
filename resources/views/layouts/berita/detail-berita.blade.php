@extends('app')
@section('content')
    <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

    <!-- Add your site or application content here -->
    <!-- slider-start -->
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center"
                style="background-image: url({{ asset('asset/img/slider/slider-2.jpg') }});">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.45); z-index:1;"></div>
                <div class="container" style="position:relative; z-index:2;">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Detail Berita</h1>
                                <nav class="text-center" aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="{{ route('berita')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
                                    </ol>
                                </nav>
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
                    @foreach ($berita as $bt)
                        <div class="blog-wrapper blog-list blog-details blue-blog mb-50">
                            <div class="blog-thumb mb-35">
                                <img src="{{ asset('storage/' . $bt->gambar) }}" alt="">
                                <span class="blog-text-offer">news</span>
                            </div>
                            <div class="blog-content news-content">
                                <div class="blog-meta news-meta">
                                    <span>{{ \Carbon\Carbon::parse($bt->tgl_berita)->translatedFormat('d F, Y') }}</span>
                                </div>
                                <h5>{{ $bt->judul }}.</h5>
                                <p>{{ $bt->deskripsi }}</p>
                                <div class="blog-wrapper-footer">
                                    <div class="news-wrapper-tags">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="new-post-tag">
                                                    <span>Tags:</span>
                                                    <a href="#">Business,</a>
                                                    <a href="#">Finance,</a>
                                                    <a href="#">Banking,</a>
                                                    <a href="#">SEO</a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="new-post-tag news-share-icon text-left text-md-right">
                                                    <span>Share</span>
                                                    <a href="#">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                    <a class="twitter" href="#">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                    <a class="dribble" href="#">
                                                        <i class="fab fa-dribbble"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="post-comments post-comments-padding white-bg mt-70 mb-30">

                        <div class="post-comments-form">
                            <div class="section-title mb-30">
                                <h2>Leave a Reply</h2>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <input type="text" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-4 col-lg-4  col-md-4">
                                        <input type="text" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-12">
                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments"></textarea>
                                        <button class="btn blue-bg" type="submit">send reply</button>
                                    </div>
                                </div>
                            </form>
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
                            <h4 class="widget-title">Category</h4>
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
                            <h4 class="widget-title">Berita Lain</h4>
                            <div class="sidebar-rc-post">
                                <ul>
                                    @foreach ($beritaLain as $bt)
                                        <li>
                                            <div class="sidebar-rc-post-main-area d-flex mb-20">
                                                <div class="rc-post-thumb">
                                                    <a href="{{ route('berita.show', $bt->slug) }}"> {{ $bt->judul }}">
                                                        <img src="{{ asset('storage/' . $bt->gambar) }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h4>
                                                        <a
                                                            href="{{ route('berita.show', $bt->slug) }}">{{ $bt->judul }}</a>
                                                    </h4>
                                                    <div class="widget-advisors-name">
                                                        <span>Author : <span
                                                                class="f-500">{{ $bt->author }}</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end news-details-->
@endsection
