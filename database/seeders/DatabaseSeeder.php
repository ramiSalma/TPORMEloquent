<?php

namespace Database\Seeders;

use App\Models\Stagiaire;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //Stagiaire::factory(10)->create();

        // Stagiaire::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('#jkudh24'),
        //     'text' => 'lorem10jfjjdlsshhejje' ,
        // ]);
      
        $this->call(StagiaireSeeder::class);
    }
}
