<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'manager',
            'role' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Mega Giantini',
            'role' => 'karyawan',
            'email' => 'mega@email.com',
            'karyawan_id' => '1',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Hamid Habibie',
            'role' => 'karyawan',
            'email' => 'hamid@email.com',
            'karyawan_id' => '2',
            'password' => bcrypt('password123')
        ]);
    }
}
