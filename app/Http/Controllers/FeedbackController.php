<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request; // Namespace yang benar

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        $nav = 'Feedback';

        return view('feedback.index', compact('feedbacks', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Kirim Feedback';
        return view('feedback.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Menggunakan Illuminate\Http\Request
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'isi' => 'required|string',
        ]);

        Feedback::create($validatedData);

        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        $nav = 'Detail Feedback - ' . $feedback->nama;
        return view('feedback.show', compact('feedback', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback) // Perbaikan tipe data
    {
        $nav = 'Edit Feedback - ' . $feedback->nama;
        return view('feedback.edit', compact('feedback', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'isi' => 'required|string',
        ]);

        $feedback->update($validatedData);

        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dihapus.');
    }
}
