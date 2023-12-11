<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;


class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alunos = [
            [
                'nome' => 'Maria Clara Souza', 
                'email' => 'mariaclara@gmail.com', 
                'senha' => '1234', 
                'data_nascimento' => '2010-03-29', 
                'responsavel' => 'Rosângela Souza', 
                'telefone' => '(85) 2365-3681', 
                'rua' => 'Marechal Deodoro', 
                'numero' => '255', 
                'bairro' => 'Centro', 
                'cidade' => 'Pelotas', 
                'sexo' => 'feminino'
            ], 
            [
                'nome' => 'Roberto Amaral da Costa Silva', 
                'email' => 'robertoamaral@gmail.com', 
                'senha' => '1234', 
                'data_nascimento' => '2010-04-11', 
                'responsavel' => 'João Silva', 
                'telefone' => '(22) 2128-3153', 
                'rua' => 'Januário Coelho da Costa', 
                'numero' => '1050', 
                'bairro' => 'Fragata', 
                'cidade' => 'Pelotas', 
                'sexo' => 'Masculino'
            ], 
            [
                'nome' => 'Enzo Mathias da Silveira Hirsh', 
                'email' => 'enzomathias@gmail.com', 
                'senha' => '1234', 
                'data_nascimento' => '2008-10-20', 
                'responsavel' => 'Maria Aparecida Silva', 
                'telefone' => '(63) 2789-8341', 
                'rua' => 'Idelfonso Simões Lopes', 
                'numero' => '431', 
                'bairro' => 'Três Vendas', 
                'cidade' => 'Pelotas', 
                'sexo' => 'Masculino'
            ]
            ]; 
            Aluno::insert($alunos); 
    }
}
