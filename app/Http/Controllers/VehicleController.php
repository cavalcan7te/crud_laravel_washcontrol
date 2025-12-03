<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Customer;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view("vehicles.index", compact('vehicles'));
    }

    public function create()
    {
        $customers = Customer::all(); 
        return view("vehicles.create", compact('customers'));
    }

    public function store(Request $request)
    {
        Vehicle::create($request->all());
        return redirect()->route("vehicles.index");
    }

    public function edit(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $customers = Customer::all(); 

        return view("vehicles.edit", compact('vehicle', 'customers'));
    }

    public function update(Request $request, string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());
        return redirect()->route("vehicles.index");
    }

    public function destroy(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect()->route("vehicles.index");
    }
}
