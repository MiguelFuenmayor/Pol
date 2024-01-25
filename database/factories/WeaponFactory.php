<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weapon>
 */
class WeaponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "functionary_id" => $this->faker->randomNumber(2,true),
            "weapon_type"=>$this->faker->word(),
            "weapon_serial"=>$this->faker->randomNumber(10,true),
            "calibre"=>$this->faker->randomElement(['9mm','15mm','0.50p'])
        ];
    }
}
