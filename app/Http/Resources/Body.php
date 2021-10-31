<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Body extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'isPlanet' => $this->isPlanet,
            'moons' => json_decode($this->moons),
            'semimajorAxis' => $this->semimajorAxis,
            'perihelion' => $this->perihelion,
            'aphelion' => $this->aphelion,
            'eccentricity' => $this->eccentricity,
            'inclination' => $this->inclination,
            'mass' => json_decode($this->mass),
            'vol' => json_decode($this->vol),
            'density' => $this->density,
            'gravity' => $this->gravity,
            'escape' => $this->escape,
            'meanRadius' => $this->meanRadius,
            'equaRadius' => $this->equaRadius,
            'polarRadius' => $this->polarRadius,
            'flattening' => $this->flattening,
            'dimension' => $this->dimension,
            'sideralOrbit' => $this->sideralOrbit,
            'sideralRotation' => $this->sideralRotation,
            'aroundPlanet' => json_decode($this->aroundPlanet),
            'discoveredBy' => $this->discoveredBy,
            'discoveryDate' => $this->discoveryDate,
            'alternativeName' => $this->alternativeName,
            'axialTilt' => $this->axialTilt,
        ];
    }
}
