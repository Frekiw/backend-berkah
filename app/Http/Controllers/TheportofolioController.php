<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Modal_portofolio;

class TheportofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modal_portofolio = Modal_portofolio::all();
        $half = ceil($modal_portofolio->count() / 2); // Membagi jumlah data menjadi dua bagian

        // Ambil setengah data pertama
        $modal_portofolio1 = $modal_portofolio->take($half);
    
        // Ambil setengah data sisanya
        $modal_portofolio2 = $modal_portofolio->slice($half);
    
        $contact = Contact::all();
    
        return view('portofolio.index', compact('modal_portofolio1', 'modal_portofolio2', 'contact'));
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
