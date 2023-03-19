@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('admin.organisasi.create') }}" class="btn bg-gradient-primary">Tambah
                            organisasi</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Organisasi</th>
                                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                            Gambar</th>
                                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                                Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organisasi as $organisasi)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">
                                                            Struktur Organisasi</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center text-sm">
                                                <img src="{{ Storage::url($organisasi->image) }}" width="150"
                                                    height="100" alt="gallery" >
                                            </td>
                                            <td class="text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Terdokumentasikan</span>
                                            </td>
                                            <td class="align-middle ">
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('admin.organisasi.edit', $organisasi->id) }}"
                                                        class="btn me-3 text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                        data-original-title="Edit user">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('admin.organisasi.destroy', $organisasi->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                                            data-original-title="Edit user">
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
