<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Universidade;

class UniversidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universidades = [
            [
                'sigla' => 'UCPEL',
                'nome' => 'Universidade Católica de Pelotas', 
                'cidade' => 'Pelotas', 
                'codigo' => '18', 
            ], 
            [
                'sigla' => 'UFPEL',
                'nome' => 'Universidade Federal de Pelotas', 
                'cidade' => 'Pelotas', 
                'codigo' => '634', 
           ]
        ]; 
        Universidade::insert($universidades); 
    }
}
