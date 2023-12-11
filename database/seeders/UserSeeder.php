<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userPadrao = [
            'name' => 'Julie Santiago', 
            'email' => 'santiago.sjulie@gmail.com', 
            'password' => '12345678'
        ]; 

        User::insert($userPadrao);
    }
}
