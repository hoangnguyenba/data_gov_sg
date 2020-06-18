<?php

namespace App\Services\DataGov;
use App\Models\PSI;
use App\Models\LastUpdate;

class PSIService {
    public function fetchLastPSI() {
        $psiTime = LastUpdate::where('type', LastUpdate::PSIType)->first()->time;
        $psis = PSI::where('timestamp', $psiTime)->get();
        return $psis;
    }
}