<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modal_profile;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_profileRequest;

class Modal_profileController extends Controller
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
    public function store(Modal_profileRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalProfile', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_profile::create($data);

        return redirect()->route('profils.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_profileRequest $request,$id)
    {
        $modal_profile = modal_profile::findOrFail($id);
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_profile->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalProfile', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_profile->update($data);

        // Redirect back with success message
        return redirect()->route('profils.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_profile instance by id
        $modal_profile = modal_profile::findOrFail($id);

        // Delete the image if it exists
        if ($modal_profile->picture) {
            Storage::delete('public/' . $modal_profile->picture);
        }

        // Delete the car$modal_profile record
        $modal_profile->delete();

        // Redirect back with a success message
        return redirect()->route('profils.index')->with('status', 'Berhasil Hapus Data');
    }
}
