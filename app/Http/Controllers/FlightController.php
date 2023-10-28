<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FlightController extends Controller
{
//    public function index()
//    {
//        $flights = Flight::all();
//        return view('flights.index', ['flights' => $flights]);
//    }
    public function getFlight()
    {
        $flights = Flight::with('tickets')->get();
        foreach ($flights as $flight) {
//             dd($flight->tickets);
        }
        return response()->json([
            'success' => true,
            'data' => $flights,
        ], Response::HTTP_OK);
    }
    public function store(FlightRequest $request){

    }
    //
}
