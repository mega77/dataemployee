<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attend')->insert([
            'karyawan_id' => '1',
            'nama' => 'Mega Giantini',
            'hadir' => '23',
            'time_off' => '0',
            'keterangan' => 'full'
        ]);
        DB::table('attend')->insert([
            'karyawan_id' => '2',
            'nama' => 'Hamid Habibie',
            'hadir' => '22',
            'time_off' => '1',
            'keterangan' => 'sickness'
        ]);
    }
}
