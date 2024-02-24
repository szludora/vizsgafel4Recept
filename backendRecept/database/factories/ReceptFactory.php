<?php

namespace Database\Factories;

use App\Models\Kategoria;
use App\Models\Recept;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recept>
 */
class ReceptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nev" => fake()->realText(10),
            "kat_id" => Kategoria::all()->random(),
            "leiras" => fake()->realText(10),
            "kep_eleresi_ut" => fake()->randomElement(Recept::$urls),
            "datum" => fake()->date(),
        ];
    }
}
