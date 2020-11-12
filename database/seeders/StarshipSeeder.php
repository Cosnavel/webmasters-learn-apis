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
            $link = new Starship();
            $link->id = $item->id;
            $link->fields = json_encode($item->fields);
            $link->save();
        }
    }
}
