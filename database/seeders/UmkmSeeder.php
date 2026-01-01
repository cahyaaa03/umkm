<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('umkm')->insert([
            [
                'pengguna_id' => 2,
                'kategori_umkm_id' => 1,
                'lokasi_id' => 1,
                'nama_usaha' => 'Maju Kuliner',
                'deskripsi' => 'UMKM makanan ringan',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pengguna_id' => 4,
                'kategori_umkm_id' => 2,
                'lokasi_id' => 2,
                'nama_usaha' => 'Kreatif Fashion',
                'deskripsi' => 'UMKM pakaian dan aksesoris',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pengguna_id' => 2,
                'kategori_umkm_id' => 3,
                'lokasi_id' => 3,
                'nama_usaha' => 'Kerajinan Tangan',
                'deskripsi' => 'UMKM kerajinan lokal',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pengguna_id' => 4,
                'kategori_umkm_id' => 4,
                'lokasi_id' => 4,
                'nama_usaha' => 'Digital Kreatif',
                'deskripsi' => 'UMKM pengembangan aplikasi',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
