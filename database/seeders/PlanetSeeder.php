<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/planet.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $link = new Planet();
            $link->id = $item->id;
            $link->fields = json_encode($item->fields);
            $link->save();
        }
    }
}
