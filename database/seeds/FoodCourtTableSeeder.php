<?php

use Illuminate\Database\Seeder;
use App\Models\FoodCourt;
use App\Models\Mall;

class FoodCourtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodCourt::create([
            'name' => 'Бургер Кинг',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'description' => 'Компания является второй по величине сетью быстрого питания в мире.',
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713705/malls/bk_rugiby.png",
        ]);

        FoodCourt::create([
            'name' => 'KFC',
            'description' => 'Международная сеть ресторанов общественного питания',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713661/malls/KFC_ppfn1p.png",
        ]);

        FoodCourt::create([
            'name' => 'МакДональдс',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'description' => 'Американская корпорация, работающая в сфере общественного питания',
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713596/malls/mac_gkbsip.png",
        ]);

        FoodCourt::create([
            'name' => 'PizzaHut',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'description' => 'Cеть ресторанов, состоящая более чем из 15 тыс. точек в более чем 100 странах мира',
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713553/malls/PizzaHut_ipbkmr.png",
        ]);
    }
}
