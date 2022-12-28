@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.data-guru.update', $guru->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <select class="form-control @error('m_class_id') is-invalid @enderror" name="m_class_id"
                                id="m_class_id" value="{{ old('m_class_id', $guru->m_class_id) }}">
                                @foreach ($kelas as $dataKelas)
                                    <option value="{{ $dataKelas->id }}">{{ $dataKelas->class_name }}</option>
                                @endforeach
                            </select>
                            @error('m_class_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('fullname') is-invalid @enderror"
                                placeholder="Nama Lengkap" aria-label="Name" aria-describedby="email-addon" name="fullname"
                                id="fullname" value="{{ old('fullname', $guru->fullname) }}">
                            @error('fullname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('institution') is-invalid @enderror"
                                placeholder="Institusi" aria-label="Name" aria-describedby="email-addon" name="institution"
                                id="institution" value="{{ old('institution', $guru->institution) }}">
                            @error('institution')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('study_program') is-invalid @enderror"
                                placeholder="Program Studi" aria-label="Name" aria-describedby="email-addon"
                                name="study_program" id="study_program"
                                value="{{ old('study_program', $guru->study_program) }}">
                            @error('study_program')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('graduation_year') is-invalid @enderror"
                                placeholder="Tahun Lulus" aria-label="Name" aria-describedby="email-addon"
                                name="graduation_year" id="graduation_year"
                                value="{{ old('graduation_year', $guru->graduation_year) }}">
                            @error('graduation_year')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('subjects') is-invalid @enderror"
                                placeholder="Mata Pelajaran" aria-label="Name" aria-describedby="email-addon"
                                name="subjects" id="subjects" value="{{ old('subjects', $guru->subjects) }}">
                            @error('subjects')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control  @error('teaching_class') is-invalid @enderror"
                                placeholder="Kelas Ajar" aria-label="Name" aria-describedby="email-addon"
                                name="teaching_class" id="teaching_class"
                                value="{{ old('teaching_class', $guru->teaching_class) }}">
                            @error('teaching_class')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                placeholder="Kelas Ajar" aria-label="Name" aria-describedby="email-addon" name="email"
                                id="email" value="{{ old('email', $guru->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="oldImage" id="oldImage" value="{{ $guru->image }}">
                            <input type="file" class="form-control  @error('image') is-invalid @enderror"
                                placeholder="Gambar" aria-label="Name" aria-describedby="email-addon" name="image"
                                id="image" value="{{ old('image', $guru->image) }}">
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
