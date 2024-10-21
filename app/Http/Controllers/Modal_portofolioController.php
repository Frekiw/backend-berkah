<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modal_portofolio;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_portofolioRequest;

class Modal_portofolioController extends Controller
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
    public function store(Modal_portofolioRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalPortofolio', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_portofolio::create($data);

        return redirect()->route('homepages.index')->with('status', 'Berhasil Tambah Data');
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
    public function update(Modal_portofolioRequest $request, Modal_portofolio $modal_portofolio)
    {
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_portofolio->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalPortofolio', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_portofolio->update($data);

        // Redirect back with success message
        return redirect()->route('homepages.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         // Find the car$modal_portofolio instance by id
        $modal_portofolio = Modal_portofolio::findOrFail($id);

        // Delete the image if it exists
        if ($modal_portofolio->picture) {
            Storage::delete('public/' . $modal_portofolio->picture);
        }
        // Delete the car$modal_portofolio record
        $modal_portofolio->delete();

        // Redirect back with a success message
        return redirect()->route('homepages.index')->with('status', 'Berhasil Hapus Data');
    }
}
