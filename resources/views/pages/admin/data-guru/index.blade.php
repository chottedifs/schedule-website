@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('admin.data-guru.create') }}" class="btn bg-gradient-primary">Tambah
                            Guru</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Lengkap</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Institusi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Program Studi</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Tahun Lulus</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Mata Pelajaran</th>
                                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Kelas</th> --}}
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guru as $dataGuru)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="{{ Storage::url($dataGuru->image) }}"
                                                            class="avatar avatar-md rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $dataGuru->fullname }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $dataGuru->email }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-secondary text-center font-weight-bold text-xs">
                                                    {{ $dataGuru->institution }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-secondary text-center font-weight-bold text-xs">
                                                    {{ $dataGuru->study_program }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-secondary text-center font-weight-bold text-xs">
                                                    {{ $dataGuru->graduation_year }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-secondary text-center font-weight-bold text-xs">
                                                    {{ $dataGuru->subjects }}
                                                </p>
                                            </td>
                                            {{-- <td class="align-middle">
                                                <p class="text-secondary text-center font-weight-bold text-xs">
                                                    {{ $dataGuru->teaching_class }}</p>
                                            </td> --}}
                                            <td class="align-middle">
                                                <a href="{{ route('admin.data-guru.edit', $dataGuru->id) }}"
                                                    class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
