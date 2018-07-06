<?php

namespace App\Http\Controllers;

use App\population_age;
use Illuminate\Http\Request;

class PopulationAgeController extends Controller
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
            'ages' => population_age::all()
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
     * @param  \App\population_age  $population_age
     * @return \Illuminate\Http\Response
     */
    public function show(population_age $population_age)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\population_age  $population_age
     * @return \Illuminate\Http\Response
     */
    public function edit(population_age $population_age)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\population_age  $population_age
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, population_age $population_age)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\population_age  $population_age
     * @return \Illuminate\Http\Response
     */
    public function destroy(population_age $population_age)
    {
        
    }

}
