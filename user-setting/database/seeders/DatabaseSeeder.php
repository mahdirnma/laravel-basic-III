<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
             'name' => 'ali',
             'email' => 'test@example.com',
             'password' => '1234',
         ]);
         User::create([
             'name' => 'reza',
             'email' => 'test2@example.com',
             'password' => '7896',
         ]);
         Setting::create([
             'theme' => 'light',
             'font' => 'iran sense',
             'user_id' => '1',
         ]);
         Setting::create([
             'theme' => 'dark',
             'font' => 'iran yekan',
             'user_id' => '2',
         ]);
    }
}
