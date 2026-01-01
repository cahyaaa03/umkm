<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notifikasi;

class NotifikasiSeeder extends Seeder
{
    public function run()
    {
        Notifikasi::insert([
            ['pengguna_id'=>2,'judul'=>'Selamat Datang','pesan'=>'UMKM Anda berhasil terdaftar','dibaca'=>false],
            ['pengguna_id'=>4,'judul'=>'Update Event','pesan'=>'Event Workshop Kreatif telah dibuka','dibaca'=>false],
            ['pengguna_id'=>3,'judul'=>'Info UMKM','pesan'=>'Cek performa UMKM yang diajukan pembiayaan','dibaca'=>false],
            ['pengguna_id'=>2,'judul'=>'Pembayaran','pesan'=>'Pembayaran pendaftaran Anda diterima','dibaca'=>false],
        ]);
    }
}
