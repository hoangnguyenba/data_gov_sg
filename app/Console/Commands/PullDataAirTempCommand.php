<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\DataGov\PullDataService;
use App\Models\LastUpdate;
use App\Models\AirTemperature;
use Carbon\Carbon;

class PullDataAirTempCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pull-data-air-temp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data air temperature from data.gov.sg';

    protected $pullDataService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(PullDataService $pullDataService)
    {
        $this->pullDataService = $pullDataService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->_fetchAndStoreAirTemperature();
    }

    /**
     * Fetch data Air Temperature and store in DB
     *
     * @return void
     */
    public function _fetchAndStoreAirTemperature() {
        $dataAT = $this->pullDataService->fetchAirTemperature();

        $items = $dataAT['items'];

        foreach ($items as $item) {
            $readings = $item['readings'];
            foreach ($readings as $at) {
                AirTemperature::updateOrCreate(
                    [
                        'timestamp' => new Carbon($item['timestamp']),
                        'station_id' => $at['station_id'],
                    ],
                    [
                        'value' => $at['value'],
                    ]
                );
            }
        }

        // Update last time
        LastUpdate::updateOrCreate(
            [
                'type' => LastUpdate::AirTempType,
            ],
            [
                'time' => new Carbon($items[0]['timestamp']),
            ]
        );
    }
}
