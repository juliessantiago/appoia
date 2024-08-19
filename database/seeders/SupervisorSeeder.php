<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supervisor;
use App\Models\Universidade;
use Illuminate\Support\Facades\Hash;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $universidades = Universidade::all()->count(); 
        $supervisores = [
            [
                'name' => 'Prof. Marcelo Alves', 
                'email' => 'marceloalves@gmail.com', 
                'password' => Hash::make('supervisor'),
                'crp' => '12345678',
                'universidade_id'=> rand(1, $universidades),
            ], 
            [
                'name' => 'Prof(a) Ângela Figueiredo', 
                'email' => 'angelafigueireo@gmail.com', 
                'password' => Hash::make('supervisor'),
                'crp' => '12345678',
                'universidade_id'=> rand(1, $universidades),
            ], 
        ];
        Supervisor::insert($supervisores); 
    }
}
