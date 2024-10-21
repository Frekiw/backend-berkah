<?php

namespace App\Http\Controllers;

use App\Http\Requests\Modal_residentalRequest;
use Illuminate\Http\Request;
use App\Models\Modal_residental;
use Illuminate\Support\Facades\Storage;

class Modal_residentalController extends Controller
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
    public function store(Modal_residentalRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalResidental', 'public');
            $data['picture'] = $picturePath;
        }
        modal_residental::create($data);

        return redirect()->route('residentals.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_residentalRequest $request, $id)
    {
        $modal_residental = Modal_residental::findOrFail($id);  // Find the model by id
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_residental->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalResidental', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_residental->update($data);

        // Redirect back with success message
        return redirect()->route('residentals.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_residental instance by id
        $modal_residental = modal_residental::findOrFail($id);

        // Delete the image if it exists
        if ($modal_residental->picture) {
            Storage::delete('public/' . $modal_residental->picture);
        }

        // Delete the car$modal_residental record
        $modal_residental->delete();

        // Redirect back with a success message
        return redirect()->route('residentals.index')->with('status', 'Berhasil Hapus Data');
    }
}
