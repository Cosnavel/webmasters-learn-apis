<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('seed')->get('swapi/films.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $film = new Film();
            $film->id = $item->id;
            $film->starships = json_encode($item->fields->starships);
            $film->edited = $item->fields->edited;
            $film->vehicles = json_encode($item->fields->vehicles);
            $film->planets = json_encode($item->fields->planets);
            $film->producer = $item->fields->producer;
            $film->title = $item->fields->title;
            $film->created = $item->fields->created;
            $film->episode_id = $item->fields->episode_id;
            $film->director = $item->fields->director;
            $film->release_date = $item->fields->release_date;
            $film->opening_crawl = $item->fields->opening_crawl;
            $film->characters = json_encode($item->fields->characters);
            $film->species = json_encode($item->fields->species);
            $film->save();
        }
    }
}
