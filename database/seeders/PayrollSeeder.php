<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payroll')->insert([
            'karyawan_id' => '1',
            'nama' => 'Mega Giantini',
            'paydate' => '2022-06-25',
            'salary' => '5000000',
            'allowance' => '300000',
            'npwp' => '50000',
            'bpjs_kerja' => '50000',
            'bpjs_kes' => '50000',
            'status' => 'paid'
        ]);
        DB::table('payroll')->insert([
            'karyawan_id' => '2',
            'nama' => 'Hamid Habibie',
            'paydate' => '2022-06-25',
            'salary' => '4800000',
            'allowance' => '300000',
            'npwp' => '50000',
            'bpjs_kerja' => '50000',
            'bpjs_kes' => '50000',
            'status' => 'paid'
        ]);
    }
}
