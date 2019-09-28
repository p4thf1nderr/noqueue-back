<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Good;
use App\Models\FoodCourt;
use Carbon\Carbon;
use App\User;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => User::first()->id,
            'food_court_id' => FoodCourt::first()->id,
            'status' => 'wait',
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
        ]);

        Order::create([
            'user_id' => User::first()->id,
            'food_court_id' => FoodCourt::first()->id,
            'status' => 'inprocess',
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
        ]);

        Order::create([
            'user_id' => User::first()->id,
            'food_court_id' => FoodCourt::first()->id,
            'status' => 'done',
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
        ]);

        Order::create([
            'user_id' => User::first()->id,
            'food_court_id' => FoodCourt::first()->id,
            'status' => 'taken',
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
        ]);

        Order::create([
            'user_id' => User::first()->id,
            'food_court_id' => FoodCourt::first()->id,
            'status' => 'rejected',
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
        ]);

        $orders = Order::all()->each(function($item, $key) {
            $goods = Good::all()->random(3);
            $item->goods()->saveMany($goods);
        });
    }
}
