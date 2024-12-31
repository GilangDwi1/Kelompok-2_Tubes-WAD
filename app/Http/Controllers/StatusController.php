<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return view('status.index', compact('status'));
    }

    public function create()
    {
        return view('status.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_pesanan' => 'required|date',
            'waktu_pemesanan' => 'required|date_format:H:i',
            'status' => 'required|string|max:255',
        ]);

        Status::create($request->all());
        return redirect()->route('status.index')->with('success', 'Status berhasil dibuat.');
    }

    public function show(string $id)
    {
        $status = Status::findOrFail($id);
        return view('status.show', compact('status'));
    }

    public function edit(string $id)
    {
        $status = Status::findOrFail($id);
        return view('status.edit', compact('status'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_pesanan' => 'required|date',
            'waktu_pemesanan' => 'required|date_format:H:i',
            'status' => 'required|string|max:255',
        ]);

        $status = Status::findOrFail($id);
        $status->update($request->all());
        return redirect()->route('status.index')->with('success', 'Status berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $status = Status::findOrFail($id);
        $status->delete();
        return redirect()->route('status.index')->with('success', 'Status berhasil dihapus.');
    }
}
