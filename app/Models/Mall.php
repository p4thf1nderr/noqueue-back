<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FoodCourt;

class Mall extends Model
{
    protected $table = "malls";

    public $timestamps = false;

    protected $appends = ['distance'];

    public function courts()
    {
        return $this->hasMany(FoodCourt::class);
    }
}
