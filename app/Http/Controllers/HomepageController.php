<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomepageRequest;
use App\Models\Homepage;
use App\Models\Modal_article;
use App\Models\Modal_portofolio;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homepage = Homepage::all();
        $modal_article = Modal_article::all();
        $modal_portofolio = Modal_portofolio::all();
        return view('homepages.index', [
            'homepage' => $homepage,
            'modal_article' => $modal_article,
            'modal_portofolio' => $modal_portofolio,
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
    public function edit(Homepage $homepage)
    {
        $homepage = Homepage::all();
        return view('homepages.edit', [
            'homepage' => $homepage,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HomepageRequest $request, Homepage $homepage)
    {
        $data = $request->all();

        $homepage->update($data);  // Update the single homepage record

        return redirect()->route('homepages.index')->with('status', 'Berhasil Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
