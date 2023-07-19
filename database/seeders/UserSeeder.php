<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Rizky Perdana Nst',
                'email'=> 'riskiperdana345@gmail.com',
                'password' => Hash::make('darkowl')
            ],
            [
                'name' => 'M. Kaja',
                'email'=> 'm.kaja@gmail.com',
                'password' => Hash::make('kaja')
            ],
            [
                'name' => 'Bjornish',
                'email'=> 'bjornish@gmail.com',
                'password' => Hash::make('bjornish')
            ],
        ]);
    }
}
