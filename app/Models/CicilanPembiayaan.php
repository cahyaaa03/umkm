<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CicilanPembiayaan extends Model
{
    protected $table = 'cicilan_pembiayaan';

    protected $fillable = [
        'pembiayaan_id',  
        'jumlah_bayar',
        'tanggal_bayar',
        'status',        
    ];
    
    public function pembiayaan()
    {
        return $this->belongsTo(PembiayaanModal::class, 'pembiayaan_id');
    }
    
}

