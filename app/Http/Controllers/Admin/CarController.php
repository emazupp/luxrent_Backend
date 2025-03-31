<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::with('brand', 'category')->get();
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view("cars.create", compact("brands", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newCar = new Car();
        $newCar->brand_id = $data["brand_id"];
        $newCar->category_id = $data["category_id"];
        $newCar->model = $data["model"];
        $newCar->year = $data["year"];
        $newCar->description = $data["description"];
        $newCar->transmission = $data["transmission"];
        $newCar->fuel_type = $data["fuel_type"];
        $newCar->seats = $data["seats"];
        $newCar->doors = $data["doors"];
        $newCar->color = $data["color"];
        $newCar->horsepower = $data["horsepower"];
        $newCar->engine_size = $data["engine_size"];
        $newCar->price_per_day = $data["price_per_day"];
        $newCar->is_available = $data["is_available"];


        $newCar->save();
        return redirect()->route("cars.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
