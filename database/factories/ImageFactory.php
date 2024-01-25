<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => 'functionaries/' . $this->faker->image(
                'public/storage/posts', 
                640, //ancho
                480, //alto
                null, //categoría
                false //nombre sin la url
            ),

        ];
    }
}
