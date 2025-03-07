<?php

namespace Database\Seeders;

use App\Models\Stagiaire;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Stagiaire::factory()->count(100)->create();
        DB::table('stagiaires')->insert([
                    'nom' => Str::random(20),
                    'prenom' => Str::random(20),
                    'email' => Str::random(10)."@gmail.com",
                    'age' => rand(4,77),
                    'password' => Hash::make('password'),
                    
             ]);
            
    }
}
