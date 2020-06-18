<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataGov\PSIService;
use App\Services\DataGov\AirTempService;

class DataGovController extends Controller
{
    /**
     * @return void
     */
    public function __construct(
        PSIService $psiService,
        AirTempService $airTempService
    ) {
        $this->psiService = $psiService;
        $this->airTempService = $airTempService;
    }

    function getFullData() {
        return response()->json([
            'airTemp' => $this->airTempService->fetchAirTempByStation('S109'), // Ang Mo Kio Avenue 5
            'psi' => $this->psiService->fetchLastPSI()
        ]);
    }
}
