<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modal_electric;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_electricRequest;

class Modal_electricController extends Controller
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
    public function store(Modal_electricRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/Modalelectric', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_electric::create($data);

        return redirect()->route('electrics.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_electricRequest $request,Modal_electric $modal_electric)
    {
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_electric->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/Modalelectric', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_electric->update($data);

        // Redirect back with success message
        return redirect()->route('electrics.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_electric instance by id
        $modal_electric = modal_electric::findOrFail($id);

        // Delete the image if it exists
        if ($modal_electric->picture) {
            Storage::delete('public/' . $modal_electric->picture);
        }

        // Delete the car$modal_electric record
        $modal_electric->delete();

        // Redirect back with a success message
        return redirect()->route('electrics.index')->with('status', 'Berhasil Hapus Data');
    }
}
