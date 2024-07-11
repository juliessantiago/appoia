<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Escola;

class EscolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $escolas = [
                [
                    'nome' => 'E.M.E.F. Almirante José Saldanha da Gama', 
                    'cidade' => 'Pelotas'
                
                ], 
                [
                    'nome' => 'E.M.E.F. Bibiano de Almeida', 
                    'cidade' => 'Pelotas'
                ], 
                [
                    'nome' =>'E.T.E. Professora Sylvia Mello', 
                    'cidade' => 'Pelotas'
                ], 
                [
                    'nome' =>'E.E.E.M. Augusto Duprat', 
                    'cidade' => 'Rio Grande'
                ], 
                [
                    'nome' =>'E.E.E.M. Augusto Duprat', 
                    'cidade' => 'Rio Grande'
                ], 
                [
                    'nome' =>'Colégio Estadual Nosso Senhor do Bonfim', 
                    'cidade' => 'Morro Redondo'
                ]
            ]; 
            Escola::insert($escolas); 
        }
    }

