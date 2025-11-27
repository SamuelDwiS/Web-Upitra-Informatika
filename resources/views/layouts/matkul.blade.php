@extends('app')

@section('content')

<div class="course-details-area gray-bg pt-100 pb-70">
        <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title mb-50 text-center">
                    <div class="section-title-heading mb-20">
                        <h1 class="primary-color">Daftar Mata Kuliah</h1>
                    </div>
                    <div class="section-title-para">
                        <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">

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

                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_01.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 1</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_02.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 2</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_03.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 3</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_04.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 4</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_05.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 5</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_06.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 6</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_07.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 7</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="courses-wrapper courses-wrapper-3 mb-30">
                                <div class="courses-thumb">
                                    <a href="course_details.html"><img src="img/courses/coursesthumb_home3_08.jpg" alt=""></a>
                                </div>
                                <div class="courses-content courses-content-3 clearfix">
                                    <div class="courses-heading mt-25 d-flex">
                                        <div class="course-title-3">
                                            <h1><a href="course_details.html">Matkul 8</a></h1>
                                        </div>
                                        {{-- <div class="courses-pricing-3">
                                            <span>$24.99</span>
                                        </div> --}}
                                    </div>
                                    <div class="courses-para mt-15">
                                        <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix mt-35">
                                        <div class="courses-button">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="course-pagination mb-30" aria-label="Page navigation example">
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


            </div>
        </div>
    </div>
<!-- team end -->


@endsection
