@extends('layouts.guest')

@section('content')

    @if ($jadwal)
        <!-- galleries -->
        <section id="galleries">
            <div class="container">
                <div class="row mt-4">
                    <p class="lead-bold mb-4">Jadwal {{ $jadwal->m_class->class_name }}</p>
                    <iframe src="{{ Storage::url($jadwal->schedule) }}" align="top" height="620" width="100%"
                        frameborder="0" scrolling="auto"></iframe>
                </div>
            </div>
        </section>
        <!-- end galleries -->
    @endif

    @if ($guru)
        <!-- Visi and misi -->
        <section id="teacher">
            <div class="container">
                <div class="row">
                    <p class="lead-bold mb-5">Guru Mata Pelajaran</p>
                    @foreach ($guru as $dataGuru)
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="card p-4">
                                <div class="d-flex">
                                    <img src="{{ Storage::url($dataGuru->image) }}" width="200"
                                        alt="{{ $dataGuru->fullname }}">
                                    <div class="ms-3">
                                        <p class="lead-bold m-0">{{ $dataGuru->fullname }}</p>
                                        <p class="lead-small m-0">{{ $dataGuru->institution }}</p>
                                        <p class="lead-small m-0">{{ $dataGuru->studt_program }}</p>
                                        <p class="lead-small mt-0 mb-2">Tahun Lulus {{ $dataGuru->graduation_year }}</p>
                                        <p class="lead-small m-0">Guru Mata Pelajaran:</p>
                                        <p class="lead-small mt-0 mb-2">{{ $dataGuru->subjects }}</p>
                                        <p class="lead-small mt-0 mb-2">Kelas: {{ $dataGuru->teaching_class }}</p>
                                        <p class="lead-small m-0">Email:</p>
                                        <p class="lead-small mt-0 mb-2">{{ $dataGuru->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Visi and misi -->
    @endif
@endsection
