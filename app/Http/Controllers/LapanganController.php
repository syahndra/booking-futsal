<?php

namespace App\Http\Controllers;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::all();
        return view('lapangan.index', compact('lapangan'));
    }

    public function tambah()
    {
        return view('lapangan.tambah');
    }

    public function proses_tambah(Request $request)
    {
        $request->validate([
            'nama_lapangan' => 'required',
            'harga_perjam' => 'required|numeric',
        ]);

        Lapangan::create($request->all());

        return redirect('/lapangan')->with('success', 'Lapangan created successfully.');
    }

    public function edit(string $id)
    {
        $lapangan = Lapangan::findOrFail($id);
        return view('lapangan.edit', compact('lapangan'));
    }

    public function update(Request $request, string $id)
    {
        $lapangan = Lapangan::findOrFail($id);
        $request->validate([
            'nama_lapangan' => 'required',
            'harga_perjam' => 'required|numeric',
        ]);

        $lapangan->update($request->all());

        return redirect('/lapangan')->with('success', 'Lapangan updated successfully.');
    }

    public function hapus(string $id)
    {
        $lapangan = Lapangan::findOrFail($id);
        $lapangan->delete();

        return redirect('/lapangan')->with('success', 'Lapangan deleted successfully.');
    }
}
