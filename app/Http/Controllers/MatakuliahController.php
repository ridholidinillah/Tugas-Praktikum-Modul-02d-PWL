<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|numeric|between:1,6', 
            'semester' => 'required|numeric'
        ]);

        Matakuliah::create($request->all());

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function edit($kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $kode_mk)
    {
        $request->validate([
            'nama_mk' => 'required',
            'sks' => 'required|numeric|between:1,6',
            'semester' => 'required|numeric'
        ]);

        $matakuliah = Matakuliah::findOrFail($kode_mk);
        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata Kuliah berhasil diupdate');
    }

    public function destroy($kode_mk)
    {
        $matakuliah = Matakuliah::findOrFail($kode_mk);
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata Kuliah berhasil dihapus');
    }
}