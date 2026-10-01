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
                'category_id' => 1, 
                'price' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sintra Board',
                'category_id' => 1, 
                'price' => 150,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mirror Keychain',
                'category_id' => 2, 
                'price' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acrylic Keychains',
                'category_id' => 1, 
                'price' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}