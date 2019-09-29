<?php

use Illuminate\Database\Seeder;
use App\Models\Mall;

class MallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mall::create([
            'name' => 'ТЦ Адмирал',
            'address' => 'Малая Морская ул., 4/1, Санкт-Петербург',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales.',
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569710036/cafe/admiral_j3xhcw.jpg",
            'coordinates' => '59.936105, 30.314672'
        ]);

        Mall::create([
            'name' => 'ТЦ Галлерея',
            'address' => 'Лиговский пр., 30А, Санкт-Петербург',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales.',
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569711352/cafe/gallery_qnoeyr.jpg",
            'coordinates' => '59.928770, 30.360552'
        ]);


        Mall::create([
            'name' => 'ТРК Варшавский Экспресс',
            'address' => 'Санкт-Петербург, Наб. Обводного канала, д.118',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales.',
            'photo' => "https://res.cloudinary.com/di3sdycra/image/upload/v1569711567/cafe/varshavskiy_ekspress_gskknk.jpg",
            'coordinates' => '59.907753, 30.307470'
        ]);
    }
}
