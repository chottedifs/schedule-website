@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.master-kelas.update', $kelas->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('class_name') is-invalid @enderror"
                                placeholder="Nama Kelas" aria-label="Name" aria-describedby="email-addon" name="class_name"
                                id="class_name" value="{{ old('class_name', $kelas->class_name) }}">
                            @error('full_name')
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
