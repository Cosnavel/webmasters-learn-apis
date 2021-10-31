<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('seed')->get('swapi/people.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $people = new People();
            $people->id = $item->id;
            $people->edited = $item->fields->edited;
            $people->name = $item->fields->name;
            $people->created = $item->fields->created;
            $people->gender = $item->fields->gender;
            $people->skin_color = $item->fields->skin_color;
            $people->hair_color = $item->fields->hair_color;
            $people->height = $item->fields->height;
            $people->eye_color = $item->fields->eye_color;
            $people->mass = $item->fields->mass;
            $people->homeworld = $item->fields->homeworld;
            $people->birth_year = $item->fields->birth_year;
            $people->save();
        }
    }
}
