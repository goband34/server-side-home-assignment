<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index() {
        return view('cars.index');
    }

    public function create() {
        return view('cars.edit');
    }

    public function edit(Car $car) {
        return view('cars.edit');
    }

    public function show(Car $car) {
        return view('cars.show');
    }
}
