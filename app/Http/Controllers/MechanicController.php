<?php

namespace App\Http\Controllers;

use App\Http\Requests\MechanicRequest;
use App\Models\Mechanic;
use App\Models\Modal_mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mechanic = Mechanic::all();
        $modal_mechanic = Modal_mechanic::all();
        return view('mechanics.index', [
            'mechanic' => $mechanic,
            'modal_mechanic' => $modal_mechanic,
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
    public function edit(Mechanic $mechanic)
    {
        $mechanic = Mechanic::all();
        $modal_mechanic = Modal_mechanic::all();
        return view('mechanics.edit', [
            'mechanic' => $mechanic,
            'modal_mechanic' => $modal_mechanic,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MechanicRequest $request, $id)
    {
        $mechanic = mechanic::findOrFail($id);  // Find the model by id
        $data = $request->all();

        $mechanic->update($data);

        return redirect()->route('mechanics.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
