<?php

namespace App\Http\Controllers;

use App\Http\Requests\ElectricRequest;
use App\Models\Electric;
use App\Models\Modal_electric;
use Illuminate\Http\Request;

class ElectricController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $electric = Electric::all();
        $modal_electric = Modal_electric::all();
        return view('electrics.index', [
            'electric' => $electric,
            'modal_electric' => $modal_electric,
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
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(electric $electric)
    {
        $electric = electric::all();
        $modal_electric = Modal_electric::all();
        return view('electrics.edit', [
            'electric' => $electric,
            'modal_electric' => $modal_electric,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ElectricRequest $request, $id)
    {
        $electric = electric::findOrFail($id);  // Find the model by id
        $data = $request->all();

        $electric->update($data);

        return redirect()->route('electrics.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
