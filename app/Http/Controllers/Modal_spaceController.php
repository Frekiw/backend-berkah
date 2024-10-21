<?php

namespace App\Http\Controllers;

use App\Models\Modal_Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_spaceRequest;

class Modal_spaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(Modal_spaceRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalSpace', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_Space::create($data);

        return redirect()->route('spaces.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_spaceRequest $request,Modal_Space $modal_space)
    {
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_space->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalSpace', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_space->update($data);

        // Redirect back with success message
        return redirect()->route('spaces.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_space instance by id
        $modal_space = modal_space::findOrFail($id);

        // Delete the image if it exists
        if ($modal_space->picture) {
            Storage::delete('public/' . $modal_space->picture);
        }

        // Delete the car$modal_space record
        $modal_space->delete();

        // Redirect back with a success message
        return redirect()->route('spaces.index')->with('status', 'Berhasil Hapus Data');
    }
}
