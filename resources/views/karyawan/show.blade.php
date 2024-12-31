@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Detail Karyawan</h2>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <strong>Nama:</strong>
                <p>{{ $karyawan->nama }}</p>
            </div>
            <div class="mb-3">
                <strong>Usia:</strong>
                <p>{{ $karyawan->usia }}</p>
            </div>
            <div class="mb-3">
                <strong>Alamat:</strong>
                <p>{{ $karyawan->alamat }}</p>
            </div>
            <div class="mb-3">
                <strong>No Telepon:</strong>
                <p>{{ $karyawan->no_telepon }}</p>
            </div>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
