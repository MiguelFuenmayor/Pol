<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Functionary>
 */
class FunctionaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "surnames"=>$this->faker->lastName(),
            "names"=>$this->faker->firstName(),
            "age"=>$this->faker->randomNumber(2),
            "gender"=>$this->faker->randomElement([1,2]),
            "identity_document"=>$this->faker->randomNumber(9,true),
            "credential"=>$this->faker->randomNumber(9,true),
            "start_date"=>$this->faker->date('d-m-Y'),
            "end_date"=>$this->faker->date('d-m-Y'),
            "promo_id"=>$this->faker->randomElement([1,2,3,4]),
            "status_id"=>$this->faker->randomElement([1,2,3,4]) ,
            "rank_id"=>$this->faker->randomElement([1,2,3,4]) ,
            "dependency_id"=>$this->faker->randomElement([1,2,3,4])
        ];
    }
}
