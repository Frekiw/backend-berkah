<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResidentalRequest;
use App\Models\Modal_residental;
use App\Models\Residental;
use Illuminate\Http\Request;

class ResidentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $residental = Residental::all();
        $modal_residental = Modal_residental::all();
        return view('residentals.index', [
            'residental' => $residental,
            'modal_residental' => $modal_residental,
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
    public function edit(Residental $residental)
    {
        $residental = Residental::all();
        $modal_residental = Modal_residental::all();
        return view('residentals.edit', [
            'residental' => $residental,
            'modal_residental' => $modal_residental,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResidentalRequest $request, $id)
    {
        $residental = Residental::findOrFail($id);  // Find the model by id
        $data = $request->all();

        $residental->update($data);

        return redirect()->route('residentals.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
