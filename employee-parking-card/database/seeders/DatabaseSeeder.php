<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\employee;
use App\Models\parking_card;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         employee::create([
             'name' => 'ali',
             'company' => 'noavaran',
         ]);
         employee::create([
             'name' => 'reza',
             'company' => 'andishe',
         ]);
         parking_card::create([
             'number' => '96',
             'expired' => '2025',
             'employee_id' => '1',
         ]);
         parking_card::create([
             'number' => '102',
             'expired' => '2026',
             'employee_id' => '2',
         ]);
    }
}
