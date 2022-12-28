@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 p-5">
                    <form role="form text-left" action="{{ route('admin.jadwal.update', $jadwal->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <select class="form-control @error('m_class_id') is-invalid @enderror" name="m_class_id"
                                id="m_class_id" value="{{ old('m_class_id', $jadwal->m_class_id) }}">
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
                            <input type="hidden" name="oldSchedule" id="oldSchedule" value="{{ $jadwal->schedule }}">
                            <input type="file" class="form-control  @error('schedule') is-invalid @enderror"
                                placeholder="Gambar" aria-label="Name" aria-describedby="email-addon" name="schedule"
                                id="schedule" value="{{ old('schedule', $jadwal->schedule) }}">
                            @error('schedule')
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
