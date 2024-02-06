<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\User;
use App\Models\Image;
use App\Models\Charge;
use App\Models\Weapon;
use App\Models\Address;
use App\Models\Functionary;
use App\Models\Characteristic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FunctionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        foreach(User::all() as $id){
            $functionaries = Functionary::factory(1)->create(
                [
                    "user_id"=> $id->id
                ]
            );
        }
        $functionaries=Functionary::all();
        foreach ($functionaries as $functionary) {
            Address::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );
            Characteristic::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );

            Size::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );
            Weapon::factory(1)->create(
                [
                    "functionary_id" => $functionary->id
                ]
            );

            for ($i = 1; $i > 3; $i++) {
                switch ($i) {
                    case 1:
                        $concept = "Functionary";
                        break;
                    case 2:
                        $concept = "front_credential";
                        break;
                    case 3:
                        $concept = "back_credential";
                        break;
                }
                Image::factory(1)->create([
                    "concept" => $concept,
                    "imageable_id" => $functionary->id,
                    "imageable_type" => Functionary::class
                ]);
            }
            $charge = random_int(1, 4);
            $functionary->charges()->attach($charge);
        }
    }
}
