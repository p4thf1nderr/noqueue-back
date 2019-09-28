<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MallTableSeeder::class);
        $this->call(FoodCourtTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
