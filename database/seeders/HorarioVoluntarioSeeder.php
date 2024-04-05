<?php

namespace Database\Seeders;
use App\Models\HorarioVoluntario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Horario;
use App\Models\Voluntario;


class HorarioVoluntarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horarios = Horario::all(); 
        $voluntarios = Voluntario::all(); 
        $voluntarios->each(function($voluntario) use ($horarios){
            $voluntario->horarios()->attach(
                $horarios->random(rand(1, 8))->pluck('id')->toArray()
            );
        });
    }
}
