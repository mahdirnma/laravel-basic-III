<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Fingerprint;
use App\Models\Person;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Person::create([
             'name' => 'ali',
             'age' => '21',
         ]);
         Person::create([
             'name' => 'reza',
             'age' => '35',
         ]);
         Fingerprint::create([
             'year' => '2024',
             'person_id' => '1',
         ]);
         Fingerprint::create([
             'year' => '2025',
             'person_id' => '2',
         ]);
    }
}
