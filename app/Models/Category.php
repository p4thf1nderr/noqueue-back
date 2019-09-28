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

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
