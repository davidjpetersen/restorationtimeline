<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'decription' => $this->faker->paragraph,
            'keywords' => $this->faker->words($nb = 3, $asText = false)->implode(', ') ,
            'status' => $this->faker->randomElement($array = array ('Auto-Draft', 'Draft', 'Review', 'Published', 'Retired'))
        ];
    }
}
