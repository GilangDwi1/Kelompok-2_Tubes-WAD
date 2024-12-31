@extends('layouts.app')
@section('content')
    {{-- Back Button --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Edit Feedback</h1>
        <a href="{{ route('feedback.index') }}" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4 py-2 shadow rounded-pill">
            <span class="material-symbols-rounded fs-5">arrow_back</span>
            Kembali
        </a>
    </div>

    {{-- Edit Isi Feedback --}}
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex align-items-center">
            <span class="material-symbols-rounded me-2">edit</span>
            <h5 class="mb-0">Form Edit Feedback</h5>
        </div>
        <form action="{{ route('feedback.update', $feedback->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" 
                           class="form-control @error('nama') is-invalid @enderror" 
                           id="nama" 
                           name="nama" 
                           value="{{ old('nama', $feedback->nama) }}" 
                           placeholder="Masukkan nama">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label fw-semibold">Isi Feedback</label>
                    <textarea class="form-control @error('isi') is-invalid @enderror" 
                              id="isi" 
                              name="isi" 
                              rows="5" 
                              placeholder="Tulis isi feedback">{{ old('isi', $feedback->isi) }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end gap-2">
                <a href="{{ route('feedback.index') }}" class="btn btn-danger d-flex align-items-center gap-2">
                    <span class="material-symbols-rounded">close</span>
                    Batalkan
                </a>
                <button type="submit" class="btn btn-primary d-flex align-items-center gap-2">
                    <span class="material-symbols-rounded">save</span>
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
