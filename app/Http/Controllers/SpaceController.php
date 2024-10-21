<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpaceRequest;
use App\Models\Modal_Space;
use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $space = Space::all();
        $modal_space = Modal_Space::all();
        return view('spaces.index', [
            'space' => $space,
            'modal_space' => $modal_space,
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
    public function edit(Space $space)
    {
        $space = Space::all();
        $modal_space = Modal_Space::all();
        return view('spaces.edit', [
            'space' => $space,
            'modal_space' => $modal_space,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpaceRequest $request, $id)
    {
        $space = Space::findOrFail($id);  // Find the model by id
        $data = $request->all();

        $space->update($data);

        return redirect()->route('spaces.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
