<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('seed')->get('swapi/planets.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $planet = new Planet();
            $planet->id = $item->id;
            $planet->edited = $item->fields->edited;
            $planet->climate = $item->fields->climate;
            $planet->surface_water = $item->fields->surface_water;
            $planet->name = $item->fields->name;
            $planet->diameter = $item->fields->diameter;
            $planet->rotation_period = $item->fields->rotation_period;
            $planet->created = $item->fields->created;
            $planet->terrain = $item->fields->terrain;
            $planet->gravity = $item->fields->gravity;
            $planet->orbital_period = $item->fields->orbital_period;
            $planet->population = $item->fields->population;
            $planet->save();
        }
    }
}
