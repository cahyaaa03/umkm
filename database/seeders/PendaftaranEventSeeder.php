<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PendaftaranEvent;

class PendaftaranEventSeeder extends Seeder
{
    public function run()
    {
        PendaftaranEvent::insert([
            ['event_id'=>1,'umkm_id'=>1],
            ['event_id'=>1,'umkm_id'=>2],
            ['event_id'=>2,'umkm_id'=>3],
            ['event_id'=>3,'umkm_id'=>4],
        ]);
    }
}
