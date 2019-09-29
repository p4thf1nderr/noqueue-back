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
            'name' => 'ПиццаФабрика',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713662/malls/pf_vzr2jv.jpg",
        ]);

        FoodCourt::create([
            'name' => 'Бургер Кинг',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713705/malls/bk_rugiby.png",
        ]);

        FoodCourt::create([
            'name' => 'KFC',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713661/malls/KFC_ppfn1p.png",
        ]);

        FoodCourt::create([
            'name' => 'МакДональдс',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713596/malls/mac_gkbsip.png",
        ]);

        FoodCourt::create([
            'name' => 'PizzaHut',
            'mall_id' => Mall::inRandomOrder()->first()->id,
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569713553/malls/PizzaHut_ipbkmr.png",
        ]);
    }
}
