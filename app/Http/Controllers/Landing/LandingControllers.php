<?php

namespace App\Http\Controllers\Landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kota;

class LandingControllers extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function pemesanan()
    {
        $kota = Kota::all();
        return view('landing.pemesanan', compact('kota'));
    }

    public function armada()
    {
        return view('landing.armada');
    }

    public function galeri()
    {
        return view('landing.galeri');
    }
}
