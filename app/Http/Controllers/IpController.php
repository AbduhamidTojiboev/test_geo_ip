<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IpController extends Controller
{
    public function getCountry(Request $request, string $ip): JsonResponse
    {
        return response()->json(['country' => geoip($ip)->country]);
    }
}
