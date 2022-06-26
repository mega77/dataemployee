<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('employee')->insert([
            'nama' => 'Mega Giantini',
            'nip' => '3275025407900010',
            'nik' => '101',
            'alamat' => 'Bekasi barat',
            'phone' => '081287177984',
            'npwp' => '999444555',
            'tgl_lahir' => '1998-12-04'
        ]);
        DB::table('employee')->insert([
            'nama' => 'Hamid Habibie',
            'nip' => '3275025123907710',
            'nik' => '102',
            'alamat' => 'Jakarta',
            'phone' => '081586091361',
            'npwp' => '966444225',
            'tgl_lahir' => '1997-11-28'
        ]);
    }
}
