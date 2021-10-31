<?php

namespace Database\Seeders;

use App\Models\Starship;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('seed')->get('swapi/starships.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $starship = new Starship();
            $starship->id = $item->id;
            $starship->pilots = json_encode($item->fields->pilots);
            $starship->MGLT = $item->fields->MGLT;
            $starship->starship_class = $item->fields->starship_class;
            $starship->hyperdrive_rating = $item->fields->hyperdrive_rating;
            $starship->save();
        }
    }
}
