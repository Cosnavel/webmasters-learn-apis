<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Swapi extends JsonResource
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
            "films" => route('films'),
            "people" => route('people'),
            "planets" => route('planets'),
            "species" => route('species'),
            "starships" => route('starships'),
            "vehicles" => route('vehicles'),
        ];
    }
}
