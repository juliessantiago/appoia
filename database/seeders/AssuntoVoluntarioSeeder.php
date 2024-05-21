<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Voluntario;
use App\Models\Assunto;
use Exception;

class AssuntoVoluntarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $voluntarios = Voluntario::all();
        $assuntos = Assunto::all(); 

        $assuntos->each(function ($assunto) use($voluntarios){
            $assunto->voluntarios()->attach(
                $voluntarios->random(rand(1,$voluntarios->count()))->pluck('id')->toArray()
            );
        });
    }
}
