<?php

namespace App\Services\DataGov\Api;
use App\Services\DataGov\PullDataService;
use Illuminate\Support\Facades\Http;

class PullDataServiceApi implements PullDataService {

    const BASE_URL = 'https://api.data.gov.sg';
    const PSI_ROUTE = '/v1/environment/psi';
    const AIR_TEMPERATURE_ROUTE = '/v1/environment/air-temperature';

    public function fetchPSI() {
        $res = Http::get(PullDataServiceApi::BASE_URL . PullDataServiceApi::PSI_ROUTE);
        return $res->json();
    }

    public function fetchAirTemperature() {
        $res = Http::get(PullDataServiceApi::BASE_URL . PullDataServiceApi::AIR_TEMPERATURE_ROUTE);
        return $res->json();
    }
}