<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkm';

    protected $fillable = [
        'pengguna_id',
        'kategori_id',
        'lokasi_id',
        'nama_usaha',
        'jangkauan_pasar',
        'status_verifikasi'
    ];

    // ================= RELASI =================

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriUmkm::class, 'kategori_id');
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }

    public function legalitas()
    {
        return $this->hasOne(LegalitasUmkm::class, 'umkm_id');
    }

    public function pembiayaan()
    {
        return $this->hasMany(PembiayaanModal::class, 'umkm_id');
    }

    public function pendaftaranEvent()
    {
        return $this->hasMany(PendaftaranEvent::class, 'umkm_id');
    }
}
