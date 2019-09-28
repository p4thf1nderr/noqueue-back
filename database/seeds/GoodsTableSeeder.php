<?php

use Illuminate\Database\Seeder;
use App\Models\Good;
use App\Models\FoodCourt;
use App\Models\Category;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Good::create([
            'title' => 'Гамбургер',
            'cooking_time' => '00:07:00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales. ',
            'price' => 140,
            'court_id' => FoodCourt::first()->id,
            'category_id' => Category::BURGER,
        ]);

        Good::create([
            'title' => 'Чизбургер',
            'cooking_time' => '00:07:00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales. ',
            'price' => 130,
            'court_id' => FoodCourt::first()->id,
            'category_id' => Category::BURGER,
        ]);

        Good::create([
            'title' => 'Шефбургер',
            'cooking_time' => '00:10:00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales. ',
            'price' => 150,
            'court_id' => FoodCourt::first()->id,
            'category_id' => Category::BURGER,
        ]);

        Good::create([
            'title' => 'Воппер классический',
            'cooking_time' => '00:05:00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales. ',
            'price' => 100,
            'court_id' => FoodCourt::first()->id,
            'category_id' => Category::WHOPPER,
        ]);

        Good::create([
            'title' => 'Твистер',
            'cooking_time' => '00:06:00',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales. ',
            'price' => 100,
            'court_id' => FoodCourt::first()->id,
            'category_id' => Category::WHOPPER,
        ]);
    }
}
