<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Horario;
use App\Models\Voluntario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HorarioVoluntario>
 */
class HorarioVoluntarioFactory extends Factory
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
        return [
            
        ];
    }
}
