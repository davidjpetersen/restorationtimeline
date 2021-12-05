<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CarouselSeeder;
// use Database\Seeders\PersonSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CarouselSeeder::class,
            PersonSeeder::class,
        ]);
    }
}
