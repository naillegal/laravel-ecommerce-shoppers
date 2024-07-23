<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $men = Category::create([
            'name' => 'Men',
            'image' => 'images/men.jpg',
            'thumbnail' => null,
            'content' => "Men's clothes",
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'name' => "Men's Sweater",
            'image' => null,
            'thumbnail' => null,
            'content' => "Men's Sweaters",
            'cat_ust' => $men->id,
            'status' => '1'
        ]);

        Category::create([
            'name' => "Men's Pant",
            'image' => null,
            'thumbnail' => null,
            'content' => "Men's Pants",
            'cat_ust' => $men->id,
            'status' => '1'
        ]);

        $women = Category::create([
            'name' => 'Women',
            'image' => 'images/women.jpg',
            'thumbnail' => null,
            'content' => "Women's clothes",
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'name' => "Women's Handbag",
            'image' => null,
            'thumbnail' => null,
            'content' => "Women's Handbags",
            'cat_ust' => $women->id,
            'status' => '1'
        ]);

        Category::create([
            'name' => "Women's Pant",
            'image' => null,
            'thumbnail' => null,
            'content' => "Women's Pants",
            'cat_ust' => $women->id,
            'status' => '1'
        ]);

        $children = Category::create([
            'name' => 'Children',
            'image' => 'images/children.jpg',
            'thumbnail' => null,
            'content' => "Children's clothes",
            'cat_ust' => null,
            'status' => '1'
        ]);

        Category::create([
            'name' => "Kids Toy",
            'image' => null,
            'thumbnail' => null,
            'content' => "Kids Toys",
            'cat_ust' => $children->id,
            'status' => '1'
        ]);

        Category::create([
            'name' => "Kids Pant",
            'image' => null,
            'thumbnail' => null,
            'content' => "Kids Pants",
            'cat_ust' => $children->id,
            'status' => '1'
        ]);

    }
}

