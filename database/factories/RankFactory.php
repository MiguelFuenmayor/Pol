<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rank>
 */
class RankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rank =  $this->faker->randomElement(['oficial', 'supervisor', 'comandante']) . ' ' . $this->faker->randomElement(['raso', 'agregado', 'en jefe']);

        switch ($rank) {
            case 'oficial raso':
                $symbol_id = 1;
                break;
            case 'oficial agregado':
                $symbol_id = 2;
                break;
            case 'oficial en jefe':
                $symbol_id = 3;
                break;
            case 'supervisor raso':
                $symbol_id = 4;
                break;
            case 'supervisor agregado':
                $symbol_id = 5;
                break;
            case 'supervisor en jefe':
                $symbol_id = 6;
                break;
            case 'comandante raso':
                $symbol_id = 7;
                break;
            case 'comandante agregado':
                $symbol_id = 8;
                break;
            case 'comandante en jefe':
                $symbol_id = 9;
                break;

            default:
                $symbol_id=1;
                break;
        }
        return [
            "name" => $rank,
            "symbol_id" => $symbol_id
        ];
    }
}
