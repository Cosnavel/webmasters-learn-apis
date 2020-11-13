<?php

namespace Database\Seeders;

use App\Models\Transport;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('seed')->get('swapi/transport.json');

        $data = json_decode($json);

        foreach ($data as $item) {
            $transport = new Transport();
            $transport->id = $item->id;
            $transport->fields = json_encode($item->fields);
            $transport->save();
        }
    }
}
