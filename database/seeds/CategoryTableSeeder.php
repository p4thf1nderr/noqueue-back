<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => 'Бургеры',
        ]);

        Category::create([
            'title' => 'ВОК',
        ]);

        Category::create([
            'title' => 'Твистеры',
        ]);

        Category::create([
            'title' => 'Снэки',
        ]);
    }
}
