<?php

namespace App\Http\Controllers;

use App\Models\Motorcycle;
use Illuminate\Http\Request;

class MotorcycleController extends Controller
{
    // 1. Menampilkan semua data sepeda motor (READ)
    public function index()
    {
        $motorcycles = Motorcycle::all();
        return view('motorcycles.index', compact('motorcycles'));
    }

    // 2. Menampilkan halaman form tambah motor
    public function create()
    {
        return view('motorcycles.create');
    }

    // 3. Menyimpan data motor baru dari form ke database Neon (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Motorcycle::create($request->all());

        return redirect()->route('motorcycles.index')->with('success', 'Data motor berhasil ditambahkan!');
    }

    // 4. Menampilkan halaman form edit data (EDIT)
    public function edit(Motorcycle $motorcycle)
    {
        return view('motorcycles.edit', compact('motorcycle'));
    }

    // 5. Memperbarui data di database Neon (UPDATE)
    public function update(Request $request, Motorcycle $motorcycle)
    {
        $request->validate([
            'merk' => 'required',
            'tipe' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        $motorcycle->update($request->all());

        return redirect()->route('motorcycles.index')->with('success', 'Data motor berhasil diperbarui!');
    }

    // 6. Menghapus data dari database Neon (DELETE)
    public function destroy(Motorcycle $motorcycle)
    {
        $motorcycle->delete();

        return redirect()->route('motorcycles.index')->with('success', 'Data motor berhasil dihapus!');
    }
}