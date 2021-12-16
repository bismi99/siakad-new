<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TahunAkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tahun_akademiks')->insert([
            'tahunakademik' => '2021-2022',
            'semester' => '1',
            'status' => 'Aktif',
        ]);
    }
}
