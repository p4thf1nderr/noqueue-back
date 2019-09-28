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
            'good_id' => Good::first()->id,
            'created_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'updated_at' => Carbon::now()->setTimezone('Europe/Moscow'),
            'link' => public_path() . '/assets/img/burger.jpg',
        ]);
    }
}
