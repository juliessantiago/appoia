<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Exception;
use App\Models\Assunto;


class AssuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try{
            $assuntos = [
                [
                    'descricao' => 'ansiedade'
                ], 
                [
                    'descricao' => 'bullying'
                ], 
                [
                    'descricao' => 'depressão'
                ], 
                [
                    'descricao' => 'orientação vocacional'
                ], 
                [
                    'descricao' => 'baixo rendimento escolar'
                ], 
                [
                    'descricao' => 'fobia social'
                ], 
            ];
            Assunto::insert($assuntos);
        }catch (Exception $error){
            \Log::info($error); 
        }
    }
}
