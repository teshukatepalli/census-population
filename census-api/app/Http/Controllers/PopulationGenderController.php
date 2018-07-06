<?php

namespace App\Http\Controllers;

use App\population_gender;
use Illuminate\Http\Request;

class PopulationGenderController extends Controller
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
            'gender' => population_gender::all()
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
     * @param  \App\population_gender  $population_gender
     * @return \Illuminate\Http\Response
     */
    public function show(population_gender $population_gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\population_gender  $population_gender
     * @return \Illuminate\Http\Response
     */
    public function edit(population_gender $population_gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\population_gender  $population_gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, population_gender $population_gender)
    {
        population_gender::where("id", "=", $population_gender->county_id)
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
     * @param  \App\population_gender  $population_gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(population_gender $population_gender)
    {
        //
    }

    public function dashboard () {
        $population->male = population_age::where('gender', '=', $population->gender)->get();
        return response()->json([
            'success' => true,
            'county' => $population
        ]);
    }
}
