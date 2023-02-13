<?php

namespace Database\Factories;

use App\Models\CelulasEvangelistica;
use App\Models\User;
use App\Models\Visita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visita>
 */
class VisitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'observaciones'=>$this->faker->sentence(),
            'fecha'=>$this->faker->dateTime(),
            'estatus'=>$this->faker->randomElement([Visita::NOVISITADO,Visita::VISITADO]),
            'user_id'=>User::all()->random()->id,
            'celula_id'=>CelulasEvangelistica::all()->random()->id,
        ];
    }
}
