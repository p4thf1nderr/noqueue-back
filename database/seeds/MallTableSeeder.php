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
            'photo' => Storage::disk('public')->url('admiral.jpg'),
            'coordinates' => '59.928185, 30.322042'
        ]);

        Mall::create([
            'name' => 'ТЦ Галлерея',
            'address' => 'Лиговский пр., 30А, Санкт-Петербург, 191040',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales.',
            'photo' => Storage::disk('public')->url('gallery.jpg'),
            'coordinates' => '59.932338, 30.353059'
        ]);


        Mall::create([
            'name' => 'ТЦ Питерский',
            'address' => 'Лиговский пр., 30А, Санкт-Петербург, 191040',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales.',
            'photo' => Storage::disk('public')->url('gallery.jpg'),
            'coordinates' => '59.927599, 30.328201'
        ]);
    }
}
