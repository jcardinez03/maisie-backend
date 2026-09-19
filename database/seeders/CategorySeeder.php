<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Accessories',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home & Decor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bags & Totes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Photography',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}