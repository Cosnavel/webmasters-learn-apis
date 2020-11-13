<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Starship extends JsonResource
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
            'fields' => json_decode($this->fields),
        ];
    }
}