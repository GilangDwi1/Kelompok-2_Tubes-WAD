@extends('layouts.feedbackapp')
@section('content')
    {{-- Hero Section --}}
    <div class="hero-section text-center mb-4">
        <h1 class="mt-3 fw-bold text-primary">Feedback Kami</h1>
        <p class="text-muted">Kami menghargai setiap pendapat dan saran Anda.</p>
    </div>

    {{-- Button Tambah Feedback --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4">
        <a href="{{ route('feedback.create') }}" class="btn btn-light d-flex align-items-center gap-2 px-4 py-2 shadow rounded-pill border border-primary">
            <span class="material-symbols-rounded fs-5 text-primary">add</span>
            <span class="fw-semibold text-primary">Tambahkan Feedback</span>
        </a>
    </div>

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm rounded" role="alert">
            <strong>Sukses!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel Feedback --}}
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h4 class="m-0">Daftar Feedback</h4>
        </div>
        <div class="card-body">
            @if ($feedbacks->isEmpty())
                <div class="text-center text-muted">
                    <p>Belum ada feedback yang ditambahkan.</p>
                </div>
            @else
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($feedbacks as $feedback)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $feedback->nama }}</td>
                                <td>{{ $feedback->isi }}</td>
                                <td>
                                    <a href="{{ route('feedback.show', $feedback->id) }}" class="btn btn-outline-info btn-sm rounded-pill">Detail</a>
                                    <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-outline-warning btn-sm rounded-pill">Edit</a>
                                    <form action="{{ route('feedback.destroy', $feedback->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
