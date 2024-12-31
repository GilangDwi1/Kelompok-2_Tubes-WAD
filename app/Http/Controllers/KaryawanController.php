<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::all(); // Atau gunakan pagination dengan paginate()
        $nav = 'Data Karyawan';
        return view('karyawan.index', compact('karyawan'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Data Karyawan';

        return view('karyawan.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKaryawanRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'usia' => 'required|integer',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
        ]);

        Karyawan::create($validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        $nav = 'Detail Karyawan - ' . $karyawan->nama;

        return view('karyawan.show', compact('karyawan', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        $nav = 'Edit Karyawan - ' . $karyawan->nama;

        return view('karyawan.edit', compact('karyawan', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'usia' => 'required|integer',
            'alamat' => 'required|string',
            'telepon' => 'required|string|max:15',
        ]);

        $karyawan->update($validatedData);

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil dihapus.');
    }
}
