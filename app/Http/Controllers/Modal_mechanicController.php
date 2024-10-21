<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modal_mechanic;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_mechanicRequest;

class Modal_mechanicController extends Controller
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
    public function store(Modal_mechanicRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalMechanic', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_mechanic::create($data);

        return redirect()->route('mechanics.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_mechanicRequest $request,Modal_mechanic $modal_mechanic)
    {
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_mechanic->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalMechanic', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_mechanic->update($data);

        // Redirect back with success message
        return redirect()->route('mechanics.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_mechanic instance by id
        $modal_mechanic = modal_mechanic::findOrFail($id);

        // Delete the image if it exists
        if ($modal_mechanic->picture) {
            Storage::delete('public/' . $modal_mechanic->picture);
        }

        // Delete the car$modal_mechanic record
        $modal_mechanic->delete();

        // Redirect back with a success message
        return redirect()->route('mechanics.index')->with('status', 'Berhasil Hapus Data');
    }
}
