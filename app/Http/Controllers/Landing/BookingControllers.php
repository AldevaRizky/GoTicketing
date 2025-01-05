<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kota;
use App\Models\Booking;


class BookingControllers extends Controller
{
    /**
     * Tampilkan form pemesanan tiket.
     */
    public function index()
    {
        // Ambil semua kota untuk dropdown (jika diperlukan)
        $kota = Kota::all();
        return view('booking.index', compact('kota'));
    }

    /**
     * Proses data pemesanan tiket.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'fromLocation' => 'required|exists:kota,nama_kota',
            'toLocation' => 'required|exists:kota,nama_kota|different:fromLocation',
            'tanggal_mulai' => 'required|date|after_or_equal:today',
            'tanggal_berakhir' => 'nullable|date|after_or_equal:tanggal_mulai',
            'jumlah_kursi' => 'required|integer|min:1',
        ]);

        // Ambil ID kota berdasarkan nama
        $kotaAsal = Kota::where('nama_kota', $request->fromLocation)->first();
        $kotaTujuan = Kota::where('nama_kota', $request->toLocation)->first();

        // Simpan pemesanan ke database
        $booking = Booking::create([
            'id_kota_asal' => $kotaAsal->id_kota,
            'id_kota_tujuan' => $kotaTujuan->id_kota,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'jumlah_kursi' => $request->jumlah_kursi,
        ]);

        // Kembalikan response atau redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pemesanan berhasil dilakukan!');
    }
}