<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Carousel;
use App\models\CarouselItem;

class CarouselItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedPluralWives();
    }

    public function seedPluralWives()
    {
        $carousel = Carousel::where('name', "Joseph Smith's Polygamy")->first();
        $carouselItems = [
            new CarouselItem(['title' => 'Emma Hale', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 16 ]),
            new CarouselItem(['title' => 'Fanny Alger', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 11 ]),
            new CarouselItem(['title' => 'Lucinda Morgan Harris', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 273  ]),
            new CarouselItem(['title' => 'Louise Beaman', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Zina Huntington', 'subtitle' => '', 'image' => '', 'color' => '#f19e20', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Presendia Huntington Buell', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Agnes Coolbrith', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Sylvia Sessions Lyon', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Mary Rollins Lightner', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Patty Bartlet Sessions', 'subtitle' => '', 'image' => '', 'color' => '#f19e20', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Marinda Johnson Hyde', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Elizabeth Davis Durfee', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Sarah Kingsley Cleveland', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Delcena Johnson', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Eliza R. Snow', 'subtitle' => '', 'image' => '', 'color' => '#f19e20', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Sarah Ann Whitney', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Martha McBride Knight', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Ruth Vose Sayers', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Flora Ann Woodworth', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Emily Dow Partridge', 'subtitle' => '', 'image' => '', 'color' => '#f19e20', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Eliza Maria Partridge', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Almera Johnson', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Lucy Walker', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Sarah Lawrence', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Maria Lawrence', 'subtitle' => '', 'image' => '', 'color' => '#f19e20', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Helen Mar Kimball', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Hanna Ells', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Elvira Cowles Holmes', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Rhoda Richards', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Desdamona Fullmer', 'subtitle' => '', 'image' => '', 'color' => '#f19e20', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Olive Frost', 'subtitle' => '', 'image' => '', 'color' => '#005370', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Melissa Lott', 'subtitle' => '', 'image' => '', 'color' => '#599286', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Nancy Winchester', 'subtitle' => '', 'image' => '', 'color' => '#e05e1b', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
            new CarouselItem(['title' => 'Fanny Young', 'subtitle' => '', 'image' => '', 'color' => '#e8ab98', 'carouselable_type' => 'App\Models\Person', 'carouselable_id' => 1  ]),
        ];

        $carousel->items()->saveMany($carouselItems);

    }

}
