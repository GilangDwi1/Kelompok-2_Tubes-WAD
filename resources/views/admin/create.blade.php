@extends('layouts.app')

@section('admin')
    {{-- Hero Section --}}
    <div class="hero-section text-center mb-4">
        <h2 class="mt-3 fw-bold text-primary">Tambahkan Menu</h2>
        <p class="text-muted">Tambah Menu.</p>
    </div>

    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
        <a href="{{ route('menu.create') }}" class="btn btn-outline-primary d-flex align-items-center gap-2 px-4 py-2 shadow rounded-pill">
            <span class="material-symbols-rounded fs-5">arrow_back</span>
            <span class="fw-semibold">Kembali</span>
        </a>
    </div>

    {{-- Form Create Menu --}}
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h4 class="m-0">Tambah Menu</h4>
        </div>
        <div class="card-body bg-light">
            <form action="{{ route('menu.store') }}" method="post">
                @csrf
                {{-- Nama --}}
                <div class="mb-4">
                    <label for="nama" class="form-label fw-semibold">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        name="nama" placeholder="Masukkan nama makanan" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Harga --}}
                <div class="mb-4">
                    <label for="harga" class="form-label fw-semibold">Harga</label>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga"
                        placeholder="Masukkan harga" value="{{ old('harga') }}">
                    @error('harga')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Kategori --}}
                <div class="mb-4">
                    <label for="kategori" class="form-label fw-semibold">Kategori</label>
                    <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="makanan" {{ old('kategori') == 'makanan' ? 'selected' : '' }}>Makanan</option>
                        <option value="minuman" {{ old('kategori') == 'minuman' ? 'selected' : '' }}>Minuman</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill fw-bold shadow-sm">Tambahkan Menu</button>
                </div>
            </form>
        </div>
    </div>
@endsection
