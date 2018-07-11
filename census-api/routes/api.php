<?php

use Illuminate\Http\Request;

header_remove('Access-Control-Allow-Origin');
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin: http://localhost:8080, http://www.hallohours.in,http://www.hallohours.com,https://www.hallohours.com');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Credentials: true');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dashboard', 'PopulationController@dashboard');
Route::ApiResource('population', 'PopulationController');
//population_age
Route::ApiResource('population_age', 'PopulationAgeController');
//population gender
Route::ApiResource('population_gender', 'PopulationGenderController');
//population hh
Route::ApiResource('population_household', 'PopulationHhController');
//population poverty
Route::ApiResource('population_poverty', 'PopulationPovertyController');
//population races
Route::ApiResource('population_race', 'PopulationRorController');

// login
Route::post('login', 'authenticationController@login');

// update ages
Route::post('updateall', 'CustomController@updateAll');
// update genders
// Route::post('updategenders', 'CustomController@updateGenders');
