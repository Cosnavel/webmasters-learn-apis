<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Swapi extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array
    {
        return [
            'films' => route('swapi.films'),
            'people' => route('swapi.people'),
            'planets' => route('swapi.planets'),
            'species' => route('swapi.species'),
            'starships' => route('swapi.starships'),
            'vehicles' => route('swapi.vehicles'),
        ];
    }
}
