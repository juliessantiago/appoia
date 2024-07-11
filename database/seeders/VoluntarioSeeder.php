<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Voluntario;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class VoluntarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $voluntarios = [
            [
                'name' => 'Pedro Alcantara', 
                'email' => 'pedroalcantara@gmail.com', 
                'password' => Hash::make('token123'),
                'cpf' => '12345678',
                'telefone' => '12345678',
                'matricula' => '12345678'
            ], 
            [
                'name' => 'Letícia Pereira', 
                'email' => 'leticiapereira@gmail.com', 
                'password' => Hash::make('token123'),
                'cpf' => '12345678',
                'telefone' => '12345678',
                'matricula' => '12345678'
            ], 
        ];
        Voluntario::insert($voluntarios); 
    }
}
