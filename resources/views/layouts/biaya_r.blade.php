@extends('app')

@section('content')
    <!-- about start -->
    <div class="section-title text-center">
        <div class="section-title-heading mb-20">
            <h1 class="primary-color">Syarat & Ketentuan</h1>
        </div>
    </div>
    <div id="reguler" class="about-area pt-100 pb-70">

        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="about-title-section mb-30">
                        <h1>Reguler</h1>
                        <p>Jalur yang disediakan dalam Penerimaan Mahasiswa Baru yang menggunakan Ujian Saringan Masuk
                            secara online maupun offline sebagai syarat utama dalam Penerimaan Mahasiswa Baru di semua
                            program studi di Universitas Pignatelli Triputra.</p>
                        <p>
                            Persyaratan: <br>
                            A. Berlaku untuk semua program studi <br>
                            B. Melampirkan dokumen rapor terakhir <br>
                            C. Mengikuti Tes Potensi Akademik <br>
                            D. Lulusan maksimal 5 tahun terakhir. <br>
                        </p>

                        <button class="theme-btn blue-bg-border mt-20"><span class="btn-text"><a
                                    href="{{ asset('asset/biaya.pdf') }}" style="color:black">Detail
                                    Biaya</a></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="#beasiswa-section" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="about-title-section mb-30">
                        <h1>Beasiswa Early Bird (KPU)</h1>
                        <p>Jalur Early Bird adalah jalur penerimaan mahasiswa baru Universitas Pignatelli Triputra (UPITRA)
                            yang diberikan kepada calon mahasiswa yang mendaftarkan diri lebih awal sesuai periode yang
                            telah ditentukan oleh tim penerimaan mahasiswa baru UPITRA.
                            Jalur ini dibuka sebagai bentuk apresiasi kepada calon mahasiswa yang telah menetapkan pilihan
                            studinya sejak awal, sekaligus mendorong percepatan penerimaan mahasiswa baru.</p>
                        <p>Melalui jalur ini, diberikan potongan biaya 100% (seratus persen) untuk Biaya Pembangunan/DPP
                            (one-time fee) dan Biaya SKS (tiap semester) khusus bagi 5 (lima) pendaftar pertama di setiap
                            program studi.
                        </p>

                        <p>
                            Persyaratan: <br>
                            a. Berlaku untuk semua program studi. <br>
                            b. Tidak pernah tinggal kelas. <br>
                            c. Surat Keterangan Sehat (khusus Fakultas Ilmu Kesehatan). <br>
                            d. Ijazah / Surat Keterangan Lulus. <br>
                            e. Menyertakan dokumen rapor terakhir. <br>
                            f. Rata-rata nilai rapor terakhir minimal 75. <br>
                            g. Mempertahankan IPK minimal 3.00 setiap semester. <br>
                            h. Membayar biaya formulir pendaftaran. <br>
                            i. Lulusan maksimal 5 tahun terakhir. <br>
                        </p>
                        <button class="theme-btn blue-bg-border mt-20"><span class="btn-text"><a
                                    href="{{ asset('asset/biaya.pdf') }}" style="color:black">Detail
                                    Biaya</a></span></button>
                    </div>
                </div>
            </div>
        </div>

        <div id="#beasiswa-section" class="about-area pt-100 pb-70">

            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-title-section mb-30">
                            <h1>Beasiswa Mitra Sekolah</h1>
                            <p>Beasiswa Mitra adalah jalur khusus bagi siswa SMA/SMK kelas XII yang berasal dari sekolah
                                atau institusi mitra, termasuk anak guru dari sekolah mitra yang telah menjalin kerja sama
                                resmi dengan Universitas Pignatelli Triputra, baik melalui Nota Kesepahaman (MoU),
                                Perjanjian Kerja Sama (MoA), maupun dokumen kerja sama lainnya.

                                Beasiswa Mitra UPITRA memberikan potongan 75% (tujuh puluh lima persen) untuk Biaya
                                Pembangunan (one-time fee) dan Biaya SKS (per semester) hingga lulus sesuai kurikulum yang
                                berlaku.</p>
                            <p>Melalui jalur ini, diberikan potongan biaya 100% (seratus persen) untuk Biaya Pembangunan/DPP
                                (one-time fee) dan Biaya SKS (tiap semester) khusus bagi 5 (lima) pendaftar pertama di
                                setiap
                                program studi.
                            </p>

                            <p>
                                Persyaratan: <br>
                                a. Berlaku untuk semua program studi. <br>
                                b. Tidak pernah tinggal kelas. <br>
                                c. Surat Keterangan Sehat (khusus Fakultas Ilmu Kesehatan). <br>
                                d. Ijazah / Surat Keterangan Lulus. <br>
                                e. Menyertakan dokumen rapor terakhir. <br>
                                f. Rata-rata nilai rapor terakhir minimal 75. <br>
                                g. Mempertahankan IPK minimal 3.00 setiap semester. <br>
                                h. Membayar biaya formulir pendaftaran. <br>
                                i. Lulusan maksimal 5 tahun terakhir. <br>
                            </p>
                            <button class="theme-btn blue-bg-border mt-20"><span class="btn-text"><a
                                        href="{{ asset('asset/biaya.pdf') }}" style="color:black">Detail
                                        Biaya</a></span></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="#beasiswa-section" class="about-area pt-100 pb-70">

            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="about-title-section mb-30">
                            <h1>Beasiswa Alumni UPITRA</h1>
                            <p>Beasiswa Alumni UPITRA diperuntukkan bagi calon mahasiswa yang memiliki anggota keluarga
                                sebagai alumni dari ABA Pignatelli, STIE Pignatelli, atau Universitas Pignatelli Triputra.
                                Beasiswa ini mencakup potongan biaya sebesar 50% untuk Biaya Gedung (DPP) dan Biaya SKS.</p>
                            <p>Melalui jalur ini, diberikan potongan biaya 100% (seratus persen) untuk Biaya Pembangunan/DPP
                                (one-time fee) dan Biaya SKS (tiap semester) khusus bagi 5 (lima) pendaftar pertama di
                                setiap
                                program studi.
                            </p>

                            <p>
                                Persyaratan: <br>
                                a. Rata-rata nilai rapor terakhir minimal 75. <br>
                                b. Menyertakan dokumen tambahan berupa surat keterangan/ijazah yang membuktikan bahwa
                                anggota keluarga adalah alumni ABA Pignatelli, STIE Pignatelli, atau Universitas Pignatelli
                                Triputra. <br>
                                c. Lulusan maksimal 5 tahun terakhir. <br>
                            </p>
                            <button class="theme-btn blue-bg-border mt-20"><span class="btn-text"><a
                                        href="{{ asset('asset/biaya.pdf') }}" style="color:black">Detail
                                        Biaya</a></span></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- about end -->
    @endsection
