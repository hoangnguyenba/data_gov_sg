<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\DataGov\PullDataService;
use App\Models\PSI;
use Carbon\Carbon;

class PullDataGovCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pull-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull data from data.gov.sg';

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
        $this->_fetchAndStorePSI();
    }

    /**
     * Fetch data PSI and store in DB
     *
     * @return void
     */
    public function _fetchAndStorePSI() {
        $dataPSI = $this->pullDataService->fetchPSI();
        $regions = $dataPSI['region_metadata'];
        $regionNames = collect($regions)->map(function ($region) {
            return $region['name'];
        })->toArray();
        $types = [
            'o3_sub_index', 'pm10_twenty_four_hourly', 'pm10_sub_index',
            'co_sub_index', 'pm25_twenty_four_hourly', 'so2_sub_index',
            'co_eight_hour_max', 'no2_one_hour_max', 'so2_twenty_four_hourly',
            'pm25_sub_index', 'psi_twenty_four_hourly', 'o3_eight_hour_max',
        ];

        $psis = $dataPSI['items'];
        foreach ($psis as $psi) {
            foreach ($types as $type) {
                foreach($regionNames as $regionName) {
                    PSI::updateOrCreate(
                        [
                            'type' => $type,
                            'region' => $regionName,
                            'timestamp' => new Carbon($psi['timestamp']),
                        ],
                        [
                            'update_timestamp' => new Carbon($psi['update_timestamp']),
                            'value' => $psi['readings'][$type][$regionName],
                        ]
                    );
                }
            }
        }
    }
}
