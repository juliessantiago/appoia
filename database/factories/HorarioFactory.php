<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Voluntario; 

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
         // $horarios = Horario::all(); 
        // $voluntarios = Voluntario::all(); 
        // $voluntarios->each(function($voluntario) use ($horarios){
        //     $voluntario->horarios()->attach(
        //         $horarios->random(rand(1, 8))->pluck('id')->toArray()
        //     );
        // });
        $voluntarios = Voluntario::all()->count(); 

        return [
            'diaSemana' => $this->faker->dayOfWeek(), 
            'inicioExpediente' => $this->faker->time('H:00'), 
            'fimExpediente' => $this->faker->time('H:00'), 
            'id_voluntario'=> rand(1, $voluntarios),
        ];
    }
}
