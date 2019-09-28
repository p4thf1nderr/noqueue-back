<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Good as GoodResource;
use App\Http\Resources\Order as OrderResource;

class FoodCourt extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'goods' => GoodResource::collection($this->whenLoaded('goods')),
            'orders' => OrderResource::collection($this->whenLoaded('orders')),
        ];
    }
}
