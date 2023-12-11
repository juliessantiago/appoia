<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Voluntario;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;

class VoluntarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try{
            // $created_at = Carbon::now()->toDateTimeString(); 
            $voluntarios = [
                [
                    'created_at' => Carbon::now(),
                    'nome' => 'João da Silva Nunes',
                    'email' => 'joaosilva@gmail.com',
                    'senha' => '12345',
                    'cpf' => '83275254090',
                    'telefone' => '(12) 98301-8718', 
                    'matricula' => '467061584247'
                ], 
                [
                    'created_at' => Carbon::now(),
                    'nome' => 'Ana Paula Fagundes',
                    'email' => 'anapaulafagundes@gmail.com',
                    'senha' => '12345',
                    'cpf' => '83275254090',
                    'telefone' => '(12) 98301-8718', 
                    'matricula' => '467061584247'
                ], 
                [
                    'created_at' => Carbon::now(),
                    'nome' => 'Luíza Gonçalves de Azevedo',
                    'email' => 'luizagazevedo@gmail.com',
                    'senha' => '12345',
                    'cpf' => '83275254090',
                    'telefone' => '(12) 98301-8718', 
                    'matricula' => '467061584247'
                ], 
            ]; 
            Voluntario::insert($voluntarios); 
        } catch(Exception $error){
            \Log::info($error);
        }
    }
}
