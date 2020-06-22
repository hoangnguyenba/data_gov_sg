<?php

namespace App\Services\DataGov;
use App\Models\AirTemperature;
use App\Models\LastUpdate;

class AirTempService {
    public function fetchAirTempByStation($station) {
        $airTempTime = LastUpdate::where('type', LastUpdate::AirTempType)
            ->where('key', $station)
            ->first()->time;
        $airTemp = AirTemperature::where('timestamp', $airTempTime)
            ->where('station_id', $station)
            ->first();
        return $airTemp;
    }
}