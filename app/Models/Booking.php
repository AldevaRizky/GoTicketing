<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'booking';

    // Primary key
    protected $primaryKey = 'id_booking';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'id_kota_asal',
        'id_kota_tujuan',
        'tanggal_mulai',
        'tanggal_berakhir',
        'jumlah_kursi',
    ];

    /**
     * Relasi dengan tabel kota (asal).
     * Booking ini memiliki kota asal.
     */
    public function kotaAsal()
    {
        return $this->belongsTo(Kota::class, 'id_kota_asal');
    }

    /**
     * Relasi dengan tabel kota (tujuan).
     * Booking ini memiliki kota tujuan.
     */
    public function kotaTujuan()
    {
        return $this->belongsTo(Kota::class, 'id_kota_tujuan');
    }
}