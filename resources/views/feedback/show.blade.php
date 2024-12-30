@extends('layouts.feedbackapp')

@section('content')
    {{-- Action Buttons --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('feedback.index') }}" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4 py-2 shadow rounded-pill">
            <span class="material-symbols-rounded fs-5">arrow_back</span>
            <span class="fw-semibold">Kembali</span>
        </a>
    </div>

    {{-- Show Daftar Feedback --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $feedback->nama }}" disabled>
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea class="form-control" id="isi" name="isi" disabled>{{ $feedback->isi }}</textarea>
            </div>
        </div>
    </div>
@endsection
