<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    const BURGER   = 1;
    const WOK      = 2;
    const TWISTER  = 3;
    const SNACK    = 4;
    const PIZZA    = 5;

    public function goods()
    {
        return $this->hasMany(Good::class);
    }
}
