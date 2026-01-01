<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'mitra_id',
        'lokasi_id',
        'nama_event',
        'tanggal',
        'kuota'
    ];

    public function mitra()
    {
        return $this->belongsTo(Pengguna::class, 'mitra_id');
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }

    public function pendaftaran()
    {
        return $this->hasMany(PendaftaranEvent::class, 'event_id');
    }
}
