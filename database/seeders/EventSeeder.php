<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('event')->insert([
            [
                'mitra_id' => 3,
                'lokasi_id' => 1,
                'nama_event' => 'Pelatihan UMKM',
                'tanggal' => now()->addDays(10),
                'kuota' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mitra_id' => 3,
                'lokasi_id' => 2,
                'nama_event' => 'Workshop Digital Marketing',
                'tanggal' => now()->addDays(15),
                'kuota' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mitra_id' => 3,
                'lokasi_id' => 3,
                'nama_event' => 'Seminar Kreatifitas',
                'tanggal' => now()->addDays(20),
                'kuota' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
