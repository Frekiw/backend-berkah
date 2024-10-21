<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintenanceRequest;
use App\Models\Maintenance;
use App\Models\Modal_maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenance = Maintenance::all();
        $modal_maintenance = Modal_maintenance::all();
        return view('maintenances.index', [
            'maintenance' => $maintenance,
            'modal_maintenance' => $modal_maintenance,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(maintenance $maintenance)
    {
        $maintenance = maintenance::all();
        $modal_maintenance = Modal_maintenance::all();
        return view('maintenances.edit', [
            'maintenance' => $maintenance,
            'modal_maintenance' => $modal_maintenance,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MaintenanceRequest $request, $id)
    {
        $maintenance = maintenance::findOrFail($id);  // Find the model by id
        $data = $request->all();

        $maintenance->update($data);

        return redirect()->route('maintenances.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
