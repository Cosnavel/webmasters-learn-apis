<?php

namespace Database\Seeders;

use App\Models\Specie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/species.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $specie = new Specie();
            $specie->id = $item->id;
            $specie->edited = $item->fields->edited;
            $specie->classification = $item->fields->classification;
            $specie->name = $item->fields->name;
            $specie->designation = $item->fields->designation;
            $specie->created = $item->fields->created;
            $specie->eye_colors = $item->fields->eye_colors;
            $specie->people = json_encode($item->fields->people);
            $specie->skin_colors = $item->fields->skin_colors;
            $specie->language = $item->fields->language;
            $specie->hair_colors = $item->fields->hair_colors;
            $specie->homeworld = $item->fields->homeworld;
            $specie->average_lifespan = $item->fields->average_lifespan;
            $specie->average_height = $item->fields->average_height;
            $specie->save();
        }
    }
}
