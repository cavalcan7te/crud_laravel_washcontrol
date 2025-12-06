<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Customer;
use App\Models\Vehicle;
use App\Models\Employee;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::where('user_id', auth()->id())->get();
        $customers = Customer::where('user_id', auth()->id())->get();
        $vehicles = Vehicle::where('user_id', auth()->id())->get();
        $employees = Employee::where('user_id', auth()->id())->get();
        return view("schedules.index", compact('schedules', 'customers', 'vehicles', 'employees'));
    }

    public function create()
    {
        $customers = Customer::where('user_id', auth()->id())->get();
        $vehicles = Vehicle::where('user_id', auth()->id())->get();
        $employees = Employee::where('user_id', auth()->id())->get();

        return view("schedules.create", compact('customers', 'vehicles', 'employees'));
    }

    public function store(Request $request)
    {
        $request->merge([
            'user_id' => auth()->id()
        ]);

        Schedule::create($request->all());
        return redirect()->route("schedules.index");
    }

    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);

        $customers = Customer::all();
        $vehicles = Vehicle::all();
        $employees = Employee::all();

        return view("schedules.edit", compact('schedule', 'customers', 'vehicles', 'employees'));
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'user_id' => auth()->id()
        ]);
        
        $schedule = Schedule::findOrFail($id);
        $schedule->update($request->all());

        return redirect()->route("schedules.index");
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route("schedules.index");
    }
}
