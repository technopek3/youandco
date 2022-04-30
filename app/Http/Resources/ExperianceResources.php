<?php

namespace App\Http\Resources;

use App\Models\Experiance;
use Illuminate\Http\Resources\Json\JsonResource;

class ExperianceResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            Experiance::NAME => $this[Experiance::NAME],
            'price' => $this[Experiance::HOURLY_PRICE],
            'date' => date_format($this[Experiance::CREATED_AT],"Y/m/d") ,
        ];
    }
}
