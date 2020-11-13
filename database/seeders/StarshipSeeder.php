<?php

namespace Database\Seeders;

use App\Models\Starship;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class StarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/starships.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $starship = new Starship();
            $starship->id = $item->id;
            $starship->fields = json_encode($item->fields);
            $starship->save();
        }
    }
}
