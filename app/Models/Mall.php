<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FoodCourt;

class Mall extends Model
{
    protected $table = "malls";

    public $timestamps = false;

    public function courts()
    {
        return $this->hasMany(FoodCourt::class);
    }

    /**
     * 
     *
     * @return float
     */
    public function getDistanceAttribute() : float
    {
        return (rand(0, 1000) / 10); //TODO: запрос к API карт для получения информации о расстоянии
    }

}
