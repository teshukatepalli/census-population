<?php

namespace App\Http\Controllers;

use App\population_hh;
use Illuminate\Http\Request;

class PopulationHhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'household' => population_hh::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\population_hh  $population_hh
     * @return \Illuminate\Http\Response
     */
    public function show(population_hh $population_hh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\population_hh  $population_hh
     * @return \Illuminate\Http\Response
     */
    public function edit(population_hh $population_hh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\population_hh  $population_hh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, population_hh $population_hh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\population_hh  $population_hh
     * @return \Illuminate\Http\Response
     */
    public function destroy(population_hh $population_hh)
    {
        //
    }
}
