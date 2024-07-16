<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'name'=> 'Slider1',
            'image'=> 'https://fakeimg.pl/250x100/',
            'content'=> 'Welcome to e-commerce site',
            'link'=> 'products',
            'status'=> '1'
        ]);
    }
}
