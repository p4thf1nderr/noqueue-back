<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mall;
use App\Models\Good;

class FoodCourt extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    public function mall()
    {
        return $this->belongsTo(Mall::class);
    }

    public function goods()
    {
        return $this->hasMany(Good::class, 'court_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'food_court_id');
    }
}
