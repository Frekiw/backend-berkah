<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Modal_profile;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = profile::all();
        $modal_profile = Modal_profile::all();
        return view('profils.index', [
            'profile' => $profile,
            'modal_profile' => $modal_profile,
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
    public function edit(Profile $profile)
    {
        $profile = Profile::all();
        $modal_profile = Modal_profile::all();
        return view('profils.edit', [
            'profile' => $profile,
            'modal_profile' => $modal_profile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, $id)
    {
        $profile = profile::findOrFail($id);  // Find the model by id
        $data = $request->all();

        $profile->update($data);

        return redirect()->route('profils.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
