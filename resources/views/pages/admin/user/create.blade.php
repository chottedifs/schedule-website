@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                placeholder="Nama Lengkap" aria-label="Name" aria-describedby="email-addon" name="name"
                                id="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                placeholder="Email" aria-label="Name" aria-describedby="email-addon" name="email"
                                id="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                placeholder="Password" aria-label="Name" aria-describedby="email-addon" name="password"
                                id="password" value="{{ old('password') }}">
                            @error('password')
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
