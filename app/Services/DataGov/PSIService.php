<?php

namespace App\Services\DataGov;
use App\Models\PSI;
use App\Models\LastUpdate;

class PSIService {
    public function fetchLastPSI() {
        $psiTime = LastUpdate::where('type', LastUpdate::PSIType)->first()->time;
        $psis = PSI::where('timestamp', $psiTime)
            ->whereIn('type', [
                'pm10_twenty_four_hourly',
                'pm25_twenty_four_hourly',
                'co_sub_index',
                'o3_sub_index',
                'so2_sub_index'
            ])
            ->get();
        return collect($psis)->mapToGroups(function ($item) {
            return [$item['region'] => [
                'type' => $item['type'],
                'value' => $item['value']
            ]];
        });
    }
}