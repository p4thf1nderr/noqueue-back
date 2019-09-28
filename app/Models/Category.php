<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    const BURGER = 1;
    const PIZZA = 2;
    const WOK = 3;
    const WHOPPER = 4;
    const BURGER1 = 5;
    const PIZZA1 = 6;
    const WOK1 = 7;
    const WHOPPER1 = 8;
    const WHOPPER2 = 9;
    const PIZZA2 = 10;
    const BURGER2 = 11;
    const WOK2 = 12;

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
