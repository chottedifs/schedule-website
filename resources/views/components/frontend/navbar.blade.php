<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg fixed-top mb-10">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('template/frontend/assets/images/logo-smk-yappika-serpong.png') }}"
                alt="logo-smk-yappika-serpong" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><img
                            src="{{ asset('template/frontend/assets/images/icons/ico-home.png') }}">
                        Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><img
                            src="{{ asset('template/frontend/assets/images/icons/ico-profile.png') }}">
                        Profil Sekolah
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('visi') }}">Visi dan Misi <img
                                    src="{{ asset('template/frontend/assets/images/icons/ico-arrow.png') }}"
                                    style="float: right;" class="ms-4"></a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('galeri') }}">Gallery Foto <img
                                    src="{{ asset('template/frontend/assets/images/icons/ico-arrow.png') }}"
                                    style="float: right;" class="ms-4"></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><img
                            src="{{ asset('template/frontend/assets/images/icons/ico-schedule.png') }}">
                        Jadwal Pembelajaran
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('jadwal-kelas-10') }}">Kelas 10 <img
                                    src="{{ asset('template/frontend/assets/images/icons/ico-arrow.png') }}"
                                    style="float: right;" class="ms-5"></a></li>
                        <li><a class="dropdown-item" href="{{ route('jadwal-kelas-11') }}">Kelas 11 <img
                                    src="{{ asset('template/frontend/assets/images/icons/ico-arrow.png') }}"
                                    style="float: right;" class="ms-5"></a></li>
                        <li><a class="dropdown-item" href="{{ route('jadwal-kelas-12') }}">Kelas 12 <img
                                    src="{{ asset('template/frontend/assets/images/icons/ico-arrow.png') }}"
                                    style="float: right;" class="ms-5"></a></li>
                        <li><a class="dropdown-item" href="{{ route('jadwal-praktek') }}">Jadwal Praktek <img
                                    src="{{ asset('template/frontend/assets/images/icons/ico-arrow.png') }}"
                                    style="float: right;" class="ms-5"></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation bar -->
