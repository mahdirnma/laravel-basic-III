<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Department::create([
             'title' => 'financial',
             'country' => 'iran',
         ]);
         Department::create([
             'title' => 'marketing',
             'country' => 'germany',
         ]);
         Admin::create([
             'name' => 'ali',
             'age' => '45',
             'department_id' => '1',
         ]);
         Admin::create([
             'name' => 'reza',
             'age' => '50',
             'department_id' => '2',
         ]);
    }
}
