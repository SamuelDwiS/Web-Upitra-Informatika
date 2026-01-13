@extends('app')

@section('content')
    <div class="course-details-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Mata Kuliah</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Daftar Mata Kuliah Program Studi Informatika.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">

                    <div class="widget mb-40 white-bg">
                        <div class="sidebar-form">
                            <form action="{{ route('matkul.search') }}" method="GET">
                                <input placeholder="Cari Mata Kuliah" name="keyword" value="{{ request('keyword') }}" type="text">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>


                    <div class="row">
                        @foreach ($matkul as $mk)
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="courses-wrapper courses-wrapper-3 mb-30">
                                    
                                    <div class="courses-content clearfix">
                                        <div class="courses-heading mt-25 d-flex">
                                            <div class="course-title-3">
                                                <h6>{{ $mk->kd_matkul }}</h5>
                                                <h1><a href="course_details.html">{{ $mk->nama_matkul }}</a></h1>
                                            </div>

                                        </div>
                                        <div class="courses-para mt-15">
                                            <p>SKS {{ $mk->sks}}</p>
                                            <p>Semester {{ $mk->semester}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-xl-12">
                                <nav class="course-pagination mb-30" aria-label="Page navigation example">                                   
                                    {{ $matkul->links('vendor.pagination.berita-pagination') }}
                                </nav>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
        <!-- team end -->
    @endsection
