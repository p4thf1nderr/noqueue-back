<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    const BURGER  = 1;
    const WOK     = 2;
    const PIZZA   = 3;
    const TWISTER = 4;
    const SNACK   = 5;

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
