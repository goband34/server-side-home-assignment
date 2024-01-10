<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index(Request $request) {
        if($request->has('manufacturer')) {
            if($request->manufacturer === 'all') {
                $cars = Car::all();
            }
            else if(ctype_digit($request->manufacturer)){
                $cars = Car::where('manufacturer_id', $request->manufacturer)->get();
            }
            else {
                return redirect()->back()->withError('Invalid manufacturer filter');
            }
        }
        else {
            $cars = Car::all();
        }

        $manufacturers = Manufacturer::all();
        $manufacturer_filter = $request->manufacturer;

        return view('cars.index', compact('cars', 'manufacturers', 'manufacturer_filter'));
    }

    public function create() {
        $mode = 'create';
        $car = new Car();
        $manufacturers = Manufacturer::all();
        return view('cars.edit', compact('mode', 'car', 'manufacturers'));
    }

    public function edit(Car $car) {
        $mode = 'edit';
        $manufacturers = Manufacturer::all();
        return view('cars.edit', compact('mode', 'car', 'manufacturers'));
    }

    public function show(Car $car) {
        return view('cars.show');
    }
}
