<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Anisha',
            'email' => 'anisha@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
