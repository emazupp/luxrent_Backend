<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'category'])->get();

        return response()->json([
            'success' => true,
            'results' => $cars
        ]);
    }

    public function show(Car $car)
    {
        $car->load("brand", "category");
        return response()->json([
            'success' => true,
            'result' => $car
        ]);
    }
}
