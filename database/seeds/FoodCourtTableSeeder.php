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
            'name' => 'Coffee Food Court',
            'mall_id' => Mall::first()->id,
        ]);

        FoodCourt::create([
            'name' => 'Pizza Food Court',
            'mall_id' => Mall::first()->id,
        ]);

        FoodCourt::create([
            'name' => 'Cake Food Court',
            'mall_id' => Mall::first()->id,
        ]);

        FoodCourt::create([
            'name' => 'Burger Food Court',
            'mall_id' => Mall::first()->id,
        ]);
    }
}
