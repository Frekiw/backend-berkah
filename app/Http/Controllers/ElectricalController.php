<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Electric;
use Illuminate\Http\Request;
use App\Models\Modal_electric;
use App\Models\Modal_portofolio;

class ElectricalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $electric = Electric::all();
        $modal_portofolio = Modal_portofolio::paginate(4);
        $contact = Contact::all();
        return view('electricals.index', compact('electric','modal_portofolio','contact')
        );
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
