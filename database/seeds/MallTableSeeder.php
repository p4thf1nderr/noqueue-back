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
        ]);

        Mall::create([
            'name' => 'ТЦ Галлерея',
            'address' => 'Лиговский пр., 30А, Санкт-Петербург, 191040',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at odio leo. Donec nulla ipsum, suscipit in lacus a, aliquet hendrerit nisl. Phasellus feugiat pharetra purus ac iaculis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus et enim sit amet justo fringilla sodales.',
            'photo' => Storage::disk('public')->url('gallery.jpg'),
        ]);
    }
}
