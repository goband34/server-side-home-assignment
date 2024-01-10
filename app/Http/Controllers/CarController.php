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
                return redirect()->back()->withErrors(['Invalid manufacturer filter']);
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

    public function store(Request $request) {
        $request->validate([
            'model' => ['required'],
            'year' => ['required', 'date_format:Y'],
            'salesperson_email' => ['required', 'email'],
            'manufacturer' => ['required', 'int']
        ]);

        try {
            \DB::beginTransaction();
            
            $car = new Car();
            $car->model = $request->model;
            $car->year = $request->year;
            $car->salesperson_email = $request->salesperson_email;
            $car->manufacturer_id = $request->manufacturer;
            $car->save();

            \DB::commit();
            return redirect()->route('cars.index')->withSuccess('Successfully saved the car');
        }
        catch (Throwable $e) {
            \DB::rollback();
            return redirect()->back()->withErrors([$e->message]);
        }
    }
}
