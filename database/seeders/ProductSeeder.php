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
        //
        DB::table('products')->insert([
            [
                'name' => 'iPhone 17 Pro Max',
                'details' => 'Electronic devices and gadgets',
                'price' => 21000000.00,
                'category_id' => 1,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Grey Cardigan',
                'details' => 'Womens apparel',
                'price' => 250000.00,
                'category_id' => 2,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'The Great Gatsby',
                'details' => 'Fiction books',
                'price' => 240000.00,
                'category_id' => 3,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Harry Potter',
                'details' => 'Fiction books',
                'price' => 350000.00,
                'category_id' => 3,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'The Lord of the Rings',
                'details' => 'Fiction books',
                'price' => 300000.00,
                'category_id' => 3,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Macbook Pro 2025',
                'details' => 'Apple Laptops',
                'price' => 35000000.00,
                'category_id' => 1,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Macbook Air 2025',
                'details' => 'Apple Laptops',
                'price' => 25000000.00,
                'category_id' => 1,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Leather Jacket',
                'details' => 'Women Apparels',
                'price' => 350000.00,
                'category_id' => 2,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Denim Jacket',
                'details' => 'Women Apparels',
                'price' => 180000.00,
                'category_id' => 2,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Oversized Dinosaur Hoodie',
                'details' => 'Men Apparels',
                'price' => 250000.00,
                'category_id' => 2,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
