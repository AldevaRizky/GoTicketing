<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kota';

    // Primary key
    protected $primaryKey = 'id_kota';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama_kota',
    ];

    /**
     * Relasi dengan tabel booking.
     * Satu kota dapat menjadi asal atau tujuan di banyak booking.
     */
    public function bookingsAsOrigin()
    {
        return $this->hasMany(Booking::class, 'id_kota_asal');
    }

    public function bookingsAsDestination()
    {
        return $this->hasMany(Booking::class, 'id_kota_tujuan');
    }
}