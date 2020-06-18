<?php

use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = __DIR__ . "/stations.json";
        $stations = json_decode(file_get_contents($filePath), true);

        Station::query()->truncate();
        foreach ($stations as $station) {
            $temp = [
                'device_id'      => $station['device_id'],
                'name'      => $station['name'],
                'latitude'  => $station['location']['latitude'],
                'longitude'  => $station['location']['longitude'],
            ];
            factory(Station::class)->create(
                [
                    'device_id'      => $station['device_id'],
                    'name'      => $station['name'],
                    'latitude'  => $station['location']['latitude'],
                    'longitude'  => $station['location']['longitude'],
                ]
            );
        }
    }
}
