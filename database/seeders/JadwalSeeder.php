<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'tahunakademik_id' => 1,
            'jurusan_id' => 1,
            'kelas_id' => 1,
            'mapel_id' => 1,
            'user_id' => 2,
            'hari' => 'Senin',
            'waktumulai' => date('H:i:s', time()),
            'waktuselesai' => date('H:i:s', time()),
        ]);
    }
}
