<?php

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filePath = __DIR__ . "/regions.json";
        $regions = json_decode(file_get_contents($filePath), true);

        Region::query()->truncate();
        foreach ($regions as $region) {
            factory(Region::class)->create(
                [
                    'code'      => $region['name'],
                    'name'      => ucfirst($region['name']),
                    'latitude'  => $region['label_location']['latitude'],
                    'longitude'  => $region['label_location']['longitude'],
                ]
            );
        }
    }
}
