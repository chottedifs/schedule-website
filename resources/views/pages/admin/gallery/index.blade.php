@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('admin.gallery.create') }}" class="btn bg-gradient-primary">Tambah
                            Galleri</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Aktifitas</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galeri as $namaGaleri)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="https://ui-avatars.com/api/?name={{ $namaGaleri->m_activity->activity_name }}"
                                                            class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">
                                                            {{ $namaGaleri->m_activity->activity_name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ Storage::url($namaGaleri->image) }}" width="150"
                                                    height="100" alt="gallery">
                                            </td>
                                            <td class="align-middle text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Terdokumentasikan</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('admin.gallery.edit', $namaGaleri->id) }}"
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
