<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FoodCourt as CourtResource;
use Illuminate\Support\Arr;

class Mall extends JsonResource
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
            'address' => $this->address,
            'photo' => $this->photo,
            'rating' => $random = Arr::random([3, 4, 5]), //TODO: расчет оценок, с комментами и модерацией
            'cafes' => CourtResource::collection($this->whenLoaded('courts')),
            // 'categories' => $categories->unique()->toArray(), //TODO: через resource, чтобы не отображать в списке
            'distance' => $this->distance,
            'description' => $this->description,
        ];
    }
}
