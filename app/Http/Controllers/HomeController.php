<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Homepage;
use App\Models\Modal_article;
use App\Models\Modal_electric;
use App\Models\Modal_maintenance;
use App\Models\Modal_mechanic;
use App\Models\Modal_portofolio;
use App\Models\Modal_profile;
use App\Models\Modal_residental;
use App\Models\Modal_Space;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homepage = Homepage::all();
        $modal_article = Modal_article::paginate(4);
        $modal_portofolio = Modal_portofolio::paginate(4);
        $contact = Contact::all();
        return view('home', compact('homepage','modal_portofolio','modal_article','contact')

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
