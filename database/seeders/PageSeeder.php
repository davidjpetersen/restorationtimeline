<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Page::create(['name' => 'Before Joseph Smith', 'slug' => 'before-joseph-smith']);
            Page::create(['name' => 'Joseph Smith\'s Early Life', 'slug' => 'joseph-smith-early-life']);
            Page::create(['name' => 'New York Period', 'slug' => 'new-york-period']);
            Page::create(['name' => 'Kirtland, Ohio', 'slug' => 'kirtland-ohio']);
            Page::create(['name' => 'Far West, Missouri', 'slug' => 'far-west-missouri']);
            Page::create(['name' => 'Nauvoo, Illinois', 'slug' => 'nauvoo-illinois']);
            Page::create(['name' => 'The Exodous', 'slug' => 'exodous']);
            Page::create(['name' => 'Utah Period', 'slug' => 'utah-period']);
    }
}
