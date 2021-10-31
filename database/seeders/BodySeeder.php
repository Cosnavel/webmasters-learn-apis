<?php

namespace Database\Seeders;

use App\Models\Body;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BodySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('seed')->get('systeme-solaire/bodies.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $body = new Body();

            $body->id = $item->id;
            $body->name = $item->englishName;
            $body->isPlanet = $item->isPlanet;
            $body->moons = json_encode($item->moons);
            $body->semimajorAxis = $item->semimajorAxis;
            $body->perihelion = $item->perihelion;
            $body->aphelion = $item->aphelion;
            $body->eccentricity = $item->eccentricity;
            $body->inclination = $item->inclination;
            $body->mass = json_encode($item->mass);
            $body->vol = json_encode($item->vol);
            $body->density = $item->density;
            $body->gravity = $item->gravity;
            $body->escape = $item->escape;
            $body->meanRadius = $item->meanRadius;
            $body->equaRadius = $item->equaRadius;
            $body->polarRadius = $item->polarRadius;
            $body->flattening = $item->flattening;
            $body->dimension = $item->dimension;
            $body->sideralOrbit = $item->sideralOrbit;
            $body->sideralRotation = $item->sideralRotation;
            $body->aroundPlanet = json_encode($item->aroundPlanet);
            $body->discoveredBy = $item->discoveredBy;
            $body->discoveryDate = $item->discoveryDate;
            $body->alternativeName = $item->alternativeName;
            $body->axialTilt = $item->axialTilt;

            $body->save();
        }
    }
}
