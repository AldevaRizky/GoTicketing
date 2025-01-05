<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kota;

class AdminKotaControllers extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        return view('Admin.kota.index', compact('kota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kota' => 'required|string|max:255',
        ]);

        Kota::create($request->all());

        return redirect()->route('kota.index')->with('success', 'Kota berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kota' => 'required|string|max:255',
        ]);

        $kota = Kota::findOrFail($id);
        $kota->update($request->all());

        return redirect()->route('kota.index')->with('success', 'Kota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kota = Kota::findOrFail($id);
        $kota->delete();

        return redirect()->route('kota.index')->with('success', 'Kota berhasil dihapus.');
    }
}

