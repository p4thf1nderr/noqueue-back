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
            'address' => 'Малая Морская ул., 4/1, Санкт-Петербург'
        ]);
    }
}
