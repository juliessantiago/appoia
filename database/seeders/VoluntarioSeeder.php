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
                    'cpf' => '80280561059',
                    'telefone' => '(12) 98301-8718', 
                    'matricula' => '837151065'
                ], 
                [
                    'created_at' => Carbon::now(),
                    'nome' => 'Ana Paula Pereira',
                    'email' => 'anapaulapereira@gmail.com',
                    'senha' => '12345',
                    'cpf' => '32019883082',
                    'telefone' => '(41) 2052-9564', 
                    'matricula' => '467061584247'
                ], 
                [
                    'created_at' => Carbon::now(),
                    'nome' => 'Luíza Gonçalves de Azevedo',
                    'email' => 'luizagazevedo@gmail.com',
                    'senha' => '12345',
                    'cpf' => '64869754070',
                    'telefone' => '(17) 2175-2427', 
                    'matricula' => '562483330'
                ], 
            ]; 
            Voluntario::insert($voluntarios); 
        } catch(Exception $error){
            \Log::info($error);
        }
    }
}
