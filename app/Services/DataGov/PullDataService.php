<?php

namespace App\Services\DataGov;

interface PullDataService {
    public function fetchPSI();
    public function fetchAirTemperature();
}