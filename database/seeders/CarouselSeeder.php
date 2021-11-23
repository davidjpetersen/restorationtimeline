<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Carousel;
class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carousels = [
            'Historical Periods',
            'Joseph Smith\'s Early Life',
            'Treasure Digging',
            'Book of Mormon Translation',
            'Doctrine and Covenants',
            'Mormon Military Action',
            'Joseph Smith\'s Polygamy',
            'Plural Wives of Joseph Smith',
            'The Succession Crisis',
            'Unpublished Revelations',
            'Early Mormon Hitmen',
        ];

        foreach ($carousels as $carouselName) {
            Carousel::create(['name' => $carouselName ]);
        }
    }
}
