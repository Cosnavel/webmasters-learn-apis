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
            $specie->fields = json_encode($item->fields);
            $specie->save();
        }
    }
}
