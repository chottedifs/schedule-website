@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.master-aktifitas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('activity_name') is-invalid @enderror"
                                placeholder="Nama Aktifitas" aria-label="Name" aria-describedby="email-addon"
                                name="activity_name" id="activity_name" value="{{ old('activity_name') }}">
                            @error('activity_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn bg-gradient-primary mt-4">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
