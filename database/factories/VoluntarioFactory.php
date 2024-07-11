<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voluntario>
 */
class VoluntarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->email, 
            'senha' => $this->faker->lexify, 
            'cpf' => $this->faker->numerify, 
            'telefone' => $this->faker->numerify, 
            'matricula' => $this->faker->bothify, 
        ];
    }
}
