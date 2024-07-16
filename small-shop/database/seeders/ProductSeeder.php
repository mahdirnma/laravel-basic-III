<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'canon 2000',
            'description' => 'lorem ipsum 1',
            'price' => '52000',
            'category_id' => 1,
            'entity' => true,
        ]);
        Product::create([
            'title' => 'galaxy a15',
            'description' => 'lorem ipsum 2',
            'price' => '20000',
            'category_id' => 2,
            'entity' => false,
        ]);

    }
}
