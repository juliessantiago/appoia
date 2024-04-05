<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'diaSemana' => $this->faker->dayOfWeek(), 
            'inicioExpediente' => $this->faker->time('H:00'), 
            'fimExpediente' => $this->faker->time('H:00'), 
        ];
    }
}
