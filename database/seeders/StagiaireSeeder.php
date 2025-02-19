<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Stagiaire::factory()->count(100)->create();
    }
}
