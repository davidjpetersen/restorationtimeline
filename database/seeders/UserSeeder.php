<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'David Petersen', 
            'email' => 'david.petersen@wgu.edu',
            'password' => '$2y$10$u8q.ClMIfJ2KUjifJaRgTuRDiEhDGW6C9Xb03GfOouWTM1r0JSI9m', 
        ]);
    }
}