@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center">Daftar Karyawan</h2>
    <div class="mb-3 text-end">
        <a href="{{ route('karyawan.create') }}" class="btn btn-success">Tambah Karyawan</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Usia</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($karyawan as $key => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td> {{-- Lebih fleksibel dari $key + 1 --}}
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->usia }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->telepon }}</td> {{-- Sesuaikan dengan nama kolom --}}
                            <td>
                                <a href="{{ route('karyawan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('karyawan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data karyawan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
