<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supervisor;
use Illuminate\Support\Facades\Hash;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supervisores = [
            [
                'name' => 'Prof. Marcelo Alves', 
                'email' => 'marceloalves@gmail.com', 
                'password' => Hash::make('supervisor'),
                'crp' => '12345678',
            ], 
            [
                'name' => 'Prof(a) Ângela Figueiredo', 
                'email' => 'angelafigueireo@gmail.com', 
                'password' => Hash::make('supervisor'),
                'crp' => '12345678',
            ], 
        ];
        Supervisor::insert($supervisores); 
    }
}
