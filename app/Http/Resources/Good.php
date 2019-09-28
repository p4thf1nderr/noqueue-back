<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Photo as PhotoResource;

class Good extends JsonResource
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
            'name' => $this->title,
            'cooking_time' => $this->cooking_time,
            'description' => $this->description,
            'price' => $this->price,
            'photo' => PhotoResource::collection($this->photo),
        ];
    }
}
