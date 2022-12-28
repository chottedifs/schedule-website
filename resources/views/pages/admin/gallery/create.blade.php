@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.gallery.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <select class="form-control @error('activity_name') is-invalid @enderror" name="m_activity_id"
                                id="m_activity_id">
                                @foreach ($aktifitas as $namaAktifitas)
                                    <option value="{{ $namaAktifitas->id }}">{{ $namaAktifitas->activity_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                placeholder="Gambar" aria-label="Name" aria-describedby="email-addon" name="image"
                                id="image" value="{{ old('image') }}">
                            @error('image')
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
