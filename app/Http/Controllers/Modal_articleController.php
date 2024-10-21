<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modal_article;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Modal_articleRequest;

class Modal_articleController extends Controller
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
    public function store(Modal_articleRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('picture'))
        {
            $picturePath = $request->file('picture')->store('assets/ModalArticle', 'public');
            $data['picture'] = $picturePath;
        }
        Modal_article::create($data);

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
    public function update(Modal_articleRequest $request,Modal_article $modal_article)
    {
        $data = $request->all();

        // Check if there's a new picture being uploaded
        if ($request->hasFile('picture')) {
            Storage::delete('public/'.$modal_article->picture);  // Delete the old picture
            $picturePath = $request->file('picture')->store('assets/ModalArticle', 'public');  // Save new picture
            $data['picture'] = $picturePath;  // Update picture path in data array
        }

        // Update the model with new data
        $modal_article->update($data);

        // Redirect back with success message
        return redirect()->route('homepages.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the car$modal_article instance by id
        $modal_article = Modal_article::findOrFail($id);

        // Delete the image if it exists
        if ($modal_article->picture) {
            Storage::delete('public/' . $modal_article->picture);
        }

        // Delete the car$modal_article record
        $modal_article->delete();

        // Redirect back with a success message
        return redirect()->route('homepages.index')->with('status', 'Berhasil Hapus Data');
    }
}
