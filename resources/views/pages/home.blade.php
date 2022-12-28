@extends('layouts.guest')

@section('content')
    <!-- galleries -->
    <section id="galleries">
        <div class="container">
            <div class="row mt-4">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/home/home-img-1.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/home/home-img-1.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/home/home-img-3.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/home/home-img-4.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/home/home-img-5.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                    <div class="item">
                        <img src="{{ asset('template/frontend/assets/images/home/home-img-6.png') }}"
                            alt="pkk-smk-yappika-serpong" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end galleries -->

    <!-- Greetings -->
    <section id="greetings">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="text-center">
                        <img src="{{ asset('template/frontend/assets/images/img-kepsek.png') }}" alt="" />
                        <p class="lead-bold m-0">Kepala SMK YAPPIKA SERPONG</p>
                        <p class="lead-regular m-0">Doddy Adnan Mandares, S.Si</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="lead-paragraph">
                        Assalamual’aikum Warahmatullah Wabarakaatuh, <br /><br />
                        Salam sejahtera bagi kita semua. <br />
                        <br />
                        Puji Syukur Alhamdulillah kita panjatkan ke hadirat Allah SWT,
                        atas berkah dan limpahan rahmat dan karunia-Nya. Alhamdulilah kini
                        SMK YAPPIKA Serpong menghadirkan layanan sistem informasi jadwal
                        pembelajaran dalam sebuah website untuk siswa, guru dan orang tua
                        sehingga dapat memudahkan informasi dalam jadwal pembelajaran yang
                        ada di SMK YAPPIKA Serpong. Website SMK YAPPIKA Serpong, berisikan
                        layanan informasi sekolah mulai dari jadwal pembelajaran, guru dan
                        jadwal praktek SMK YAPPIKA Serpong. Pendidik pada saat ini harus
                        siap dalam menghadapi perkembangan jaman dan juga khusunya
                        perkembangan teknologi sihangga mampu menyajikan pelayanan yang
                        maksimal kepada peserta didik, Semua peserta didik harus menjadi
                        manusia yang cerdas, menginternalisasikan kecerdasannya dengan
                        akhlak mulia, dan menjadi manusia yang tangguh dalam menghadapi
                        dinamika kehidupan yang berbeda. Dengan mengasah karakter secara
                        cermat, dan menjadikan lulusan yang berguna bagi orang tua dan
                        masyarakat sekitar. <br /><br />
                        Semoga Allah SWT meridhoi semua niat kita dan melindungi keluarga
                        besar SMK YAPPIKA Serpong. <br /><br />
                        Wassalamu’alaikum Warahmatullah Wabarakaatuh
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Greetings -->
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 2,
                    },
                },
            });
        });
    </script>
@endpush
