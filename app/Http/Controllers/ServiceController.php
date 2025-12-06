<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('user_id', auth()->id())->get();
        return view("services.index", compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'user_id' => auth()->id()
        ]);

        Service::create($request->all());
        return redirect()->route("services.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // (Este método não está implementado, mas está correto)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrfail($id);
        return view("services.edit", compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->merge([
            'user_id' => auth()->id()
        ]);
        
        $service = Service::findOrfail($id);
        $service->update($request->all());
        return redirect()->route("services.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrfail($id);
        $service->delete();
        return redirect()->route("services.index");
    }
}