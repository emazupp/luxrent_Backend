<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        if (array_key_exists("main_image", $data)) {
            $path = Storage::putFile("uploads/cars", $data["main_image"]);
            $newCar->images()->create([
                "path" => "storage/".$path,
                "is_main" => true
            ]);
        }

        if (array_key_exists("top_image", $data)) {
            $path = Storage::putFile("uploads/cars", $data["top_image"]);
            $newCar->images()->create([
                "path" => "storage/".$path,
                "is_top" => true
            ]);
        }

        if (array_key_exists("detail_images", $data)) {
            foreach ($data["detail_images"] as $image) {
                $path = Storage::putFile("uploads/cars", $image);
                $newCar->images()->create([
                    "path" => "storage/".$path,
                    "is_main" => false
                ]);
            }
        }

        return redirect()->route("cars.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view("cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view("cars.edit", compact("car", "brands", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $data = $request->all();
        $car->brand_id = $data["brand_id"];
        $car->category_id = $data["category_id"];
        $car->model = $data["model"];
        $car->year = $data["year"];
        $car->description = $data["description"];
        $car->transmission = $data["transmission"];
        $car->fuel_type = $data["fuel_type"];
        $car->seats = $data["seats"];
        $car->doors = $data["doors"];
        $car->color = $data["color"];
        $car->horsepower = $data["horsepower"];
        $car->engine_size = $data["engine_size"];
        $car->price_per_day = $data["price_per_day"];
        $car->is_available = $data["is_available"];

        if (array_key_exists("main_image", $data)) {
            $mainImage = $car->images()->where("is_main", true)->first();
            if ($mainImage) {
                Storage::delete($mainImage->path);
                $mainImage->delete();
            }

            $path = Storage::putFile("uploads/cars", $data["main_image"]);
            $car->images()->create([
                "path" => "storage/".$path,
                "is_main" => true
            ]);
        }


        if (array_key_exists("top_image", $data)) {
            $topImage = $car->images()->where("is_top", true)->first();
            if ($topImage) {
                Storage::delete($topImage->path);
                $topImage->delete();
            }

            $path = Storage::putFile("uploads/cars", $data["top_image"]);
            $car->images()->create([
                "path" => "storage/".$path,
                "is_top" => true
            ]);
        }

        if (array_key_exists("detail_images", $data)) {
            $detailImages = $car->images()->where("is_main", false)->where("is_top", false)->get();
            foreach ($detailImages as $image) {
                Storage::delete($image->path);
                $image->delete();
            }

            foreach ($data["detail_images"] as $image) {
                $path = Storage::putFile("uploads/cars", $image);
                $car->images()->create([
                    "path" => "storage/".$path,
                    "is_main" => false
                ]);
            }
        }

        $car->update();


        return redirect()->route("cars.show", $car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $images = $car->images;
        foreach ($images as $image) {
            Storage::delete($image->path);
            $image->delete();
        }
        $car->delete();

        return redirect()->route("cars.index");
    }
}
