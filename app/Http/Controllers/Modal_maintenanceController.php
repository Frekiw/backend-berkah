<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modal_maintenance;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_maintenanceRequest;

class Modal_maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Modal_maintenanceRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalMaintenance', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_maintenance::create($data);

        return redirect()->route('maintenances.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_maintenanceRequest $request,Modal_maintenance $modal_maintenance)
    {
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_maintenance->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalMaintenance', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_maintenance->update($data);

        // Redirect back with success message
        return redirect()->route('maintenances.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_maintenance instance by id
        $modal_maintenance = modal_maintenance::findOrFail($id);

        // Delete the image if it exists
        if ($modal_maintenance->picture) {
            Storage::delete('public/' . $modal_maintenance->picture);
        }

        // Delete the car$modal_maintenance record
        $modal_maintenance->delete();

        // Redirect back with a success message
        return redirect()->route('maintenances.index')->with('status', 'Berhasil Hapus Data');
    }
}
