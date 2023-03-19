@extends('layouts.app')

@isset($message)
    <div class="alert alert-success">
        <strong>{{ @message }}</strong>
    </div>
    @endif

    @section('content')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div>
                                <a href="{{ route('admin.print-teacher') }}" class="btn bg-gradient-primary">Download data
                                    guru</a>
                                <a href="{{ route('admin.data-guru.create') }}" class="btn bg-gradient-primary">Tambah
                                    Guru</a>
                            </div>
                            <form role="form text-left" action="{{ route('admin.search-teacher') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex align-items-center mb-20">
                                    <div class="w-50">
                                        <select class="form-control" name="m_class_id" id="m_class_id">
                                            @foreach ($kelas as $dataKelas)
                                                @if (old('m_class_id') == $dataKelas->id)
                                                    <option value="{{ $dataKelas->id }}">{{ $dataKelas->class_name }}</option>
                                                @else
                                                    <option value="{{ $dataKelas->id }}">{{ $dataKelas->class_name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn bg-gradient-primary mt-3"
                                        style="margin-left: 20px">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama Lengkap</th>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                Kelas </th>
                                            <th
                                                class="text-uppercase text-center text-secondary text-xxs text-left font-weight-bolder opacity-7">
                                                Mata Pelajaran</th>
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
                                                        {{ $dataGuru->teaching_class }}</p>
                                                </td>
                                                {{-- <td class="align-middle">
                                                <p class="text-secondary text-left font-weight-bold text-xs">
                                                    {{ $dataGuru->institution }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-secondary text-left font-weight-bold text-xs">
                                                    {{ $dataGuru->study_program }}</p>
                                            </td>
                                            <td class="align-middle">
                                                <p class="text-secondary text-center font-weight-bold text-xs">
                                                    {{ $dataGuru->graduation_year }}</p> --}}
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
                                                    <div class="d-flex justify-content-end">
                                                        <a href="{{ route('admin.data-guru.edit', $dataGuru->id) }}"
                                                            class="btn me-3 text-secondary font-weight-bold text-xs"
                                                            data-toggle="tooltip" data-original-title="Edit user">
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('admin.data-guru.destroy', $dataGuru->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn text-secondary font-weight-bold text-xs"
                                                                data-toggle="tooltip" data-original-title="Edit user">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
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
