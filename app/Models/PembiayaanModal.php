<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembiayaanModal extends Model
{
    protected $table = 'pembiayaan_modal';

    protected $fillable = [
        'umkm_id',
        'mitra_id',
        'jumlah_pinjaman',
        'tenor_bulan',
        'status'
    ];

    
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }

  
    public function mitra()
    {
        return $this->belongsTo(Pengguna::class, 'mitra_id');
    }

    
    public function cicilan()
    {
        return $this->hasMany(CicilanPembiayaan::class, 'pembiayaan_id');
    }
}
