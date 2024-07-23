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
            'name' => 'Product 1',
            'image' => 'images/shoe_1.jpg',
            'category_id' => 1,
            'short_text' => 'Short Text',
            'price' => 100,
            'size' => 'S',
            'color' => 'White',
            'quantity' => 10,
            'status' => '1',
            'content' => '<p>A very good product</p>',
        ]);

        Product::create([
            'name' => 'Product 2',
            'image' => 'images/cloth_2.jpg',
            'category_id' => 2,
            'short_text' => 'Short Text 2',
            'price' => 150,
            'size' => 'L',
            'color' => 'Black',
            'quantity' => 5,
            'status' => '1',
            'content' => '<p>Second very good product</p>',
        ]);
    }
}
