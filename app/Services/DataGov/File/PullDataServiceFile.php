<?php

namespace App\Services\DataGov\File;
use App\Services\DataGov\PullDataService;
use Carbon\Carbon;

class PullDataServiceFile implements PullDataService {

    public function fetchPSI() {
        $date = Carbon::now()->format('dmY');
        $filePath = config('data-gov.filePathPSI') . "/$date.json";
        $res = json_decode(file_get_contents($filePath), true);
        return $res;
    }

    public function fetchAirTemperature() {
        $date = Carbon::now()->format('dmY');
        $filePath = config('data-gov.filePathAirTemp') . "/$date.json";
        $res = json_decode(file_get_contents($filePath), true);
        return $res;
    }
}