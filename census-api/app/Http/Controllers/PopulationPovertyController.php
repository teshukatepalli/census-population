<?php

namespace App\Http\Controllers;

use App\population_poverty;
use Illuminate\Http\Request;

class PopulationPovertyController extends Controller
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
            'poverty' => population_poverty::all()
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
     * @param  \App\population_poverty  $population_poverty
     * @return \Illuminate\Http\Response
     */
    public function show(population_poverty $population_poverty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\population_poverty  $population_poverty
     * @return \Illuminate\Http\Response
     */
    public function edit(population_poverty $population_poverty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\population_poverty  $population_poverty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, population_poverty $population_poverty)
    {
        population_poverty::where("id", "=", $population_poverty->county_id)
            ->update([
                'Population' => $request->get('Population'),
                'Population_MOE' => $request->get('Population_MOE'),
                'Uninsured' => $request->get('Uninsured'),
                'Uninsured_MOE' => $request->get('Uninsured_MOE'),
                'Uninsured_Pct' => $request->get('Uninsured_Pct'),
                'Uninsured_Pct_MOE' => $request->get('Uninsured_Pct_MOE')
            ]);
        return response()->json([
            'success' => true,
            "message" => 'Population Updated Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\population_poverty  $population_poverty
     * @return \Illuminate\Http\Response
     */
    public function destroy(population_poverty $population_poverty)
    {
        //
    }
}
