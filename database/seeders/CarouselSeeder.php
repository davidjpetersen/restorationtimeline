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
            'Scripture Changes',
            'Kirtland Safety Society',
            'Priesthood Restoration',
            'Development of Temple Doctrine',
            'Evolution of the Word of Wisdom',
            'Mormonism and Homosexuality',
            'Mormon Dissenters',
            'LDS Church Finances',
            'Blood Atonement', 
            'Mormon Military Action',
            'Joseph Smith\'s Polygamy',
            'Plural Wives of Joseph Smith',
            'The Succession Crisis',
            'Unpublished Revelations',
            'Early Mormon Hitmen',
            'Danite Members',
            'First Vision Accounts',
            'Early Mormonism and Magic',
            'Joseph Smith Translation Projects',
            'Race and the Priesthood',
            'Name of the Church',
            'Joseph Smith Run-ins With the Law',
        ];

        foreach ($carousels as $carouselName) {
            Carousel::create(['name' => $carouselName ]);
        }
    }
}
