<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/people.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $people = new People();
            $people->id = $item->id;
            $people->fields = json_encode($item->fields);
            $people->save();
        }
    }
}
