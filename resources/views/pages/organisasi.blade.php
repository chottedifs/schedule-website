@extends('layouts.guest')

@section('content')
<!-- galleries -->
<section id="galleries">
    <div class="container">
            @if ($organisasi)
            @foreach ($organisasi as $organisasi)
                <div class="row d-flex justify-content-center mt-4 ">
                    <p class="lead-bold mb-5">Struktur Organisasi</p>
                    <img src="{{ Storage::url($organisasi->image) }}" alt="organisasi-smk-yappika-serpong" style="width: 70%;"/>
                </div>
            @endforeach
            @endif
        </div>
    </section>
    <!-- end galleries -->
    @endsection
