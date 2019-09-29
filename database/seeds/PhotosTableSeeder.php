<?php

use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\Good;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::create([
            'good_id' => 1,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714311/goods/gamburger_p5efqc.jpg",
        ]);

        Photo::create([
            'good_id' => 14,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/funchoza_s_ovoshami-398653_dudh8t.jpg",
        ]);

        Photo::create([
            'good_id' => 11,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/4_%D1%81%D1%8B%D1%80%D0%B0-760x440_jro3je.png",
        ]);

        Photo::create([
            'good_id' => 9,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/116620-ed4_wide_rzheux.jpg",
        ]);

        Photo::create([
            'good_id' => 7,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/potate_u0ywed.jpg",
        ]);

        Photo::create([
            'good_id' => 2,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/chizburger_j39gbm.jpg",
        ]);

        Photo::create([
            'good_id' => 13,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/bee94c2f_kla3xq.jpg",
        ]);

        Photo::create([
            'good_id' => 10,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/pizza-peperoni-2_pof86a.jpg",
        ]);

        Photo::create([
            'good_id' => 12,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/pizza_bogatyrskaya_16092015_164556_Z0VR_sk8prt.jpg",
        ]);

        Photo::create([
            'good_id' => 5,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/tvister_ig0c4w.jpg",
        ]);

        Photo::create([
            'good_id' => 15,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/recept_5798_coko_m3kkla.jpg",
        ]);
        
        Photo::create([
            'good_id' => 4,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/twisterorig_vm5ma6.jpg",
        ]);

        Photo::create([
            'good_id' => 3,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/royal_hym8pc.png",
        ]);

        Photo::create([
            'good_id' => 5,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/royal_hym8pc.png",
        ]);


        Photo::create([
            'good_id' => 8,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569714312/goods/royal_hym8pc.png",
        ]);
    }
}
