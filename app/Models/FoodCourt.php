<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mall;

class FoodCourt extends Model
{
    public function courts()
    {
        return $this->belongsTo(Mall::class);
    }
}
