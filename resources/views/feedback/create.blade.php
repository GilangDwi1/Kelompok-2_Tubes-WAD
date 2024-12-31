@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="hero-section text-center mb-4">
        <h2 class="mt-3 fw-bold text-primary">Buat Feedback Anda</h2>
        <p class="text-muted">Bagikan pendapat atau saran Anda kepada kami.</p>
    </div>

    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
        <a href="{{ route('feedback.index') }}" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4 py-2 shadow rounded-pill">
            <span class="material-symbols-rounded fs-5">arrow_back</span>
            <span class="fw-semibold">Kembali</span>
        </a>
    </div>

    {{-- Form Create Feedback --}}
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h4 class="m-0">Formulir Feedback</h4>
        </div>
        <div class="card-body bg-light">
            <form action="{{ route('feedback.store') }}" method="post">
                @csrf
                {{-- Nama --}}
                <div class="mb-4">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" placeholder="Masukkan nama Anda" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                {{-- Isi --}}
                <div class="mb-4">
                    <label for="isi" class="form-label fw-semibold">Isi Feedback</label>
                    <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi"
                        rows="5" placeholder="Tuliskan feedback Anda">{{ old('isi') }}</textarea>
                    @error('isi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill fw-bold shadow-sm">Kirim Feedback</button>
                </div>
            </form>
        </div>
    </div>
@endsection
