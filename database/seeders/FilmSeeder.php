<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/films.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $film = new Film();
            $film->id = $item->id;
            $film->fields = json_encode($item->fields);
            $film->save();
        }
    }
}
