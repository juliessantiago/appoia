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
        Voluntario::factory()->count(5)->create(); 
    }
}
