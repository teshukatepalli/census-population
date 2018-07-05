<?php

namespace App\Http\Controllers;

use App\population;
use App\population_age;
use App\population_gender;
use App\population_ror;
use App\population_hh;
use App\population_poverty;
use Illuminate\Http\Request;

class PopulationController extends Controller
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
            'counties' => population::all()
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
        return population::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\population  $population
     * @return \Illuminate\Http\Response
     */
    public function show(population $population)
    {
        $population->ages = population_age::where('county_id', '=', $population->id)->get();
        $population->genders = population_gender::where('county_id', '=', $population->id)->get();
        $population->rors = population_ror::where('county_id', '=', $population->id)->get();
        return response()->json([
            'success' => true,
            'county' => $population
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\population  $population
     * @return \Illuminate\Http\Response
     */
    public function edit(population $population)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\population  $population
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, population $population)
    {
        population::where("id", "=", $population->id)
            ->update([
                'Population' => $request->get('Population'),
                'Population_MOE' => $request->get('Population_MOE')
            ]);
        return response()->json([
            'success' => true,
            "message" => 'Population Updated Successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\population  $population
     * @return \Illuminate\Http\Response
     */
    public function destroy(population $population)
    {
        $population->delete();
        return response()->json([
            'success' => true,
            'message' => 'County Deleted Successfully'
        ]);
    }
}