@extends('layouts.guest')

@section('content')
    <!-- Stories -->
    <section id="stories">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="lead-bold mb-4">SEJARAH SMK YAPPIKA SERPONG</p>
                    <p class="lead-paragraph">
                        YAPPIKA “Yayasan Pendidikan Putra Putri Kita” merupakan lembaga
                        sekolah swasta yang berdiri cukup lama ikut ambil dalam bagian
                        upaya mencerdaskan kehidupan bangsa, melalui usaha-usaha dan
                        sekolah yang diselenggarakan sejak tahun 2002 sampai dengan saat
                        ini. Pada tahun 2002 di Tangerang didirikan Yayasan baru bernama
                        YAPPIKA (Yayasan Pendidikan Putra Putri Kita), SMK pertama yaitu
                        SMK YAPPIKA Legok yang terletak di Kabupaten Tangerang Kecamatan
                        Legok pada tahun 2002. SMK kedua yaitu SMK YAPPIKA Serpong yang
                        terletak di Kota Tangerang Selatan pada tahun 2018. SMK YAPPIKA
                        SERPONG yang didirikan dan dibuka sejak Tahun 2018 dibawah lembaga
                        Yayasan Pendidikan Putra Putri Kita (YAPPIKA) dan telah memperoleh
                        ijin operasional dari dinas Pendidikan Provinsi Banten pada tahun
                        2021 dan memiliki tiga program keahlian yaitu Multimedia,
                        Akomodasi Perhotelan dan TBSM (Teknik dan Bisnis Sepeda Motor).
                        Tujuan didirikan SMK YAPPIKA Serpong adalah untuk mencetak
                        siswa/siswi yang mempunyai kompetensi keahlian sesuai dibidangnya
                        dan siap akan dunia kerja.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('template/frontend/assets/images/smk-yappika-serpong.png') }}"
                            alt="smk-yappika-serpong" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Stories -->

    <!-- Visi and misi -->
    <section id="visi">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="lead-bold text-center mb-4">VISI SEKOLAH</p>
                    <div class="card text-center p-4">
                        <p class="lead-regular my-auto">
                            “Sebagai pusat pendidikan dan pelatihan yang menghasilkan tenaga
                            pendidikan kerja terampil dan handal serta sanggup bersaing di
                            era global”
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="lead-bold text-center mb-4">MISI SEKOLAH</p>
                    <div class="card p-4">
                        <ul class="lead-regular my-auto">
                            <li>
                                Menanamkan keimanan dan ketaqwaan kepada tuhan yang maha esa.
                            </li>
                            <li>
                                Menyelenggarakan pendidikan yang efektif, efisien dan
                                berkualitas.
                            </li>
                            <li>
                                Menghasilkan tenaga kerja dibidang profesional bidang
                                teknologi untuk memenuhi tuntutan dunia usaha dan industri
                                (DUDI).
                            </li>
                            <li>
                                Membekali peserta didik dengan kemapuan untuk dapat
                                mengembangkan diri.
                            </li>
                            <li>
                                Memberikan layanan prima dibidang pendidikan teknologi
                                berbasis teknologi informasi dan komunikasi (TIK).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Visi and misi -->

    <!-- galleries -->
    <section id="galleries">
        <div class="container">
            <div class="row mt-4">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/visi/visi-img-1.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/visi/visi-img-2.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/visi/visi-img-3.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end galleries -->
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 4500,
                autoplayhoverpause: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 2,
                    },
                },
            });
        });
    </script>
@endpush
