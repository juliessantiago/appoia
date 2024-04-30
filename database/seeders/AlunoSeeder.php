<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;
use Illuminate\Support\Facades\Hash;


class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alunos = [
            [
                'name' => 'Maria Clara Souza', 
                'email' => 'mariaclara@gmail.com', 
                'password' => Hash::make('password'),
                'data_nascimento' => '2010-03-29', 
                'responsavel' => 'Rosângela Souza', 
                'cidade' => 'Pelotas', 
                'sexo' => 'feminino'
            ], 
            [
                'name' => 'Roberto Amaral da Costa Silva', 
                'email' => 'robertoamaral@gmail.com', 
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'data_nascimento' => '2010-04-11', 
                'responsavel' => 'João Silva', 
                'cidade' => 'Pelotas', 
                'sexo' => 'Masculino'
            ], 
            [
                'name' => 'Enzo Mathias da Silveira Hirsh', 
                'email' => 'enzomathias@gmail.com', 
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'data_nascimento' => '2008-10-20', 
                'responsavel' => 'Maria Aparecida Silva', 
                'cidade' => 'Pelotas', 
                'sexo' => 'Masculino'
            ]
            ]; 
            Aluno::insert($alunos); 
    }
}
