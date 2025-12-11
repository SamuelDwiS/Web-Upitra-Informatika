@extends('app')

@section('content')

<!-- about start -->
<div id="about" class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="about-left mt-40">
                    <div class="about-title-section">
                        <h1>Ka.Prodi</h1>
                    </div>
                    <div class="about-content about-content-2">
                        <h4>Nama Prodi</h4>
                        <p>Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod temin cididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci tation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about-right-img mb-30">
                    <img src="{{asset('asset/img/about/about-right002.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about end -->

<!-- team start -->
<div class="course-details-area gray-bg pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title mb-50 text-center">
                    <div class="section-title-heading mb-20">
                        <h1 class="primary-color">Staff Dosen Pengampu</h1>
                    </div>
                    <div class="section-title-para">
                        <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
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
                                <img src="{{ asset('asset/foto_dosen/'. $ds->foto) }}" alt="">
                            </div>

                            <div class="team-teacher-info text-center">
                                <h1>{{ $ds->nama_dosen }}</h1>
                                <h2>NIDN</h2>
                                <h2>{{ $ds->NIDN }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
<!-- team end -->
@endsection
