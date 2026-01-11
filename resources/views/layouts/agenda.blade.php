@extends('app')
@section('content')
    <!-- slider-start -->
    <div class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-height slider-height-breadcrumb d-flex align-items-center"
                style="background-image: url( {{ asset('asset/img/slider/slider-2.jpg') }});">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.45);z-index:1;">
                </div>
                <div class="container" style="position:relative; z-index:2;">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider-content slider-content-breadcrumb text-center">
                                <h1 class="white-color f-700">Agenda</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- courses start -->
    <div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
        <div class="container">
            <div class="courses-list">
                <div class="row">
                    @foreach ($agenda as $ag)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="courses-wrapper course-radius-none mb-30">
                                <div class="courses-thumb" >
                                    <a href="course_details.html"><img src="{{ asset('storage/' . $ag->gambar_poster) }}"
                                            alt=""></a>
                                </div>
                                <div class="courses-author">
                                    <img src="img/courses/coursesauthor1.png" alt="">
                                </div>
                                <div class="course-main-content clearfix">
                                    <div class="courses-content">
                                        <div class="courses-category-name">
                                            <span>
                                                <a href="#">Agenda</a>
                                            </span>
                                        </div>
                                        <div class="courses-heading">
                                            <h1><a href="course_details.html">{{ $ag->judul_agenda }}</a></h1>
                                        </div>
                                        <div class="courses-para">
                                            <p>{{ $ag->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="courses-wrapper-bottom clearfix">
                                    <div class="courses-icon d-flex f-left">
                                        <div class="courses-single-icon">
                                            <span class="ti-user"></span>
                                            <span class="user-number">{{ $ag->pembicara }}</span>
                                        </div>
                                        <div class="courses-single-icon">
                                            <span class="ti-calendar"></span>
                                            <span class="user-number">{{ \Carbon\Carbon::parse($ag->tanggal_mulai)->translatedFormat('d F, Y') }}</span>
                                        </div>
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
@endsection
