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
            'name' => 'Rizalli Rahman', 
            'email' => 'c030321109@mahasiswa.poliban.ac.id', 
            'password' => Hash::make('0025933399@Mhs'), 
        ]);
    }
}
