@extends('layouts.guest')

@section('content')
    <!-- galleries -->
    <section id="galleries">
        <div class="container">
            @foreach ($aktifitas as $dataAktifitas)
                <div class="row mt-4">
                    <p class="lead-bold mb-5">{{ $dataAktifitas->activity_name }}</p>
                    <div class="owl-carousel owl-theme">
                        @foreach ($galeri as $dataGaleri)
                            @if ($dataGaleri->m_activity_id === $dataAktifitas->id)
                                <div class="item">
                                    <img src="{{ Storage::url($dataGaleri->image) }}" alt="pkk-smk-yappika-serpong" />
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
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
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        });
    </script>
@endpush
