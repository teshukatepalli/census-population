<?php

namespace App\Http\Controllers;

use App\population_ror;
use Illuminate\Http\Request;

class PopulationRorController extends Controller
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
            'races' => population_ror::all()
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
        return population_ror::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\population_ror  $population_ror
     * @return \Illuminate\Http\Response
     */
    public function show(population_ror $population_ror)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\population_ror  $population_ror
     * @return \Illuminate\Http\Response
     */
    public function edit(population_ror $population_ror)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\population_ror  $population_ror
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, population_ror $population_ror)
    {
        population_ror::where("id", "=", $population_ror->county_id)
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
     * @param  \App\population_ror  $population_ror
     * @return \Illuminate\Http\Response
     */
    public function destroy(population_ror $population_ror)
    {
        //
    }
}
