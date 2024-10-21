<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalElectric = DB::table('modal_electrics')->count();
        $totalArticle = DB::table('modal_articles')->count();
        $totalSpace = DB::table('modal__spaces')->count();
        $totalMechanic = DB::table('modal_mechanics')->count();
        $totalprofiles = DB::table('modal_profiles')->count();
        $totalresidentals = DB::table('modal_residentals')->count();
        $totalmaintenances = DB::table('modal_maintenances')->count();
        return view('dashboard', compact('totalElectric', 'totalArticle', 'totalSpace', 'totalMechanic'
        ,'totalprofiles','totalresidentals','totalmaintenances'));
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
