<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Badge',
                'category_id' => 1, // Accessories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pins',
                'category_id' => 1, // Accessories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sintra Board',
                'category_id' => 2, // Home & Decor
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keychains',
                'category_id' => 1, // Accessories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mirror Kaychains',
                'category_id' => 2, // Home & Decor
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Photo Prints',
                'category_id' => 4, // Photography
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tote Bags',
                'category_id' => 3, // Bags & Totes
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}