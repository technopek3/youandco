<?php

namespace App\Http\Resources;

use App\Models\Holiday;
use Illuminate\Http\Resources\Json\JsonResource;

class HolidayResources extends JsonResource
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
            'id'=>$this['id'],
            Holiday::DATE => $this->getDate(),
            Holiday::NAME => $this->getName(),
            Holiday::FEE => $this->getFee()
        ];
    }
}
