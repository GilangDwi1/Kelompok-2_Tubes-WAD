<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request; // Namespace yang benar

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = menu::all();

        return view('admin.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambahkan Menu';
        return view('admin.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Menggunakan Illuminate\Http\Request
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'kategori' => 'required|string|max:100',
        ]);

        Menu::create($validatedData);

        return redirect()->route('admin.dashboard')->with('success', 'Menu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $nav = 'Detail Menu - ' . $menu->nama;
        return view('admin.show', compact('menu', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu) // Perbaikan tipe data
    {
        $nav = 'Edit Menu - ' . $menu->nama;
        return view('admin.edit', compact('menu', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'kategori' => 'required|string|max:100',
        ]);

        $menu->update($validatedData);

        return redirect()->route('.index')->with('success', 'Menu berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(Menu $menu)
        {
            $menu->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Menu berhasil dihapus.');
        }
}
