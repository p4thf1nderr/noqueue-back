<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Good as GoodResource;
use App\Http\Resources\Order as OrderResource;
use Illuminate\Support\Arr;

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
        $ctg = $this->goods->map(function($item){
            $goods = $item->category->goods->map(function($item) {
                    $link = $item->photo()->exists() ? $item->photo->first()->link : "";
                    $item['link'] = $link;
                return $item;
            });
            $item->category['goods'] = $goods;
            return $item->category;
        });


      
        return [
            'id' => $this->id,
            'name' => $this->name,
            'photo' => $this->photo,
            'description' => $this->description,
            'rating' => $random = Arr::random([3, 4, 5]), //TODO: расчет оценок, с комментами и модерацией
            'goods' => GoodResource::collection($this->whenLoaded('goods')),
            'orders' => OrderResource::collection($this->whenLoaded('orders')),
            'categories' => $ctg->unique()->toArray(), 
        ];
    }
}
