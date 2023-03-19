@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.organisasi.update', $organisasi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <input type="hidden" name="oldImage" id="oldImage" value="{{ $organisasi->image }}">
                            <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                placeholder="Gambar" aria-label="Name" aria-describedby="email-addon" name="image"
                                id="image" value="{{ old('image', $organisasi->image) }}">
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
