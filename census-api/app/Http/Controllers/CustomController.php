<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\population_age;
use App\population_gender;
use App\population_ror;
use App\population_hh;
use App\population_poverty;

class CustomController extends Controller
{
    
	//update_all
    public function updateAll(Request $request) {

    	$test = 0;
    	if ($request->get('update_type') == 'age') {
    		# code...
    		foreach ($request->get('data') as $age) {
    			# code...
    			$test = population_age::where('id', '=', $age['id'])
    				->update([
                		'Population' => $age['Population'],
                		'Population_MOE' => $age['Population_MOE'],
                		'Uninsured' => $age['Uninsured'],
                		'Uninsured_MOE' => $age['Uninsured_MOE'],
                		'Uninsured_Pct' => $age['Uninsured_Pct'],
                		'Uninsured_Pct_MOE' => $age['Uninsured_Pct_MOE']
    				]);
    		}
    	}
    	//gender
    	if ($request->get('update_type') == 'gender') {
    		# code...
    		foreach ($request->get('data') as $gender) {
    			# code...
    			$test = population_gender::where('id', '=', $gender['id'])
    				->update([
                		'Population' => $gender['Population'],
                		'Population_MOE' => $gender['Population_MOE'],
                		'Uninsured' => $gender['Uninsured'],
                		'Uninsured_MOE' => $gender['Uninsured_MOE'],
                		'Uninsured_Pct' => $gender['Uninsured_Pct'],
                		'Uninsured_Pct_MOE' => $gender['Uninsured_Pct_MOE']
    				]);
    		}
    	}
    	//Races
		if ($request->get('update_type') == 'races') {
			# code...
			foreach ($request->get('data') as $races) {
				# code...
				$test = population_ror::where('id', '=', $races['id'])
					->update([
	            		'Population' => $races['Population'],
	            		'Population_MOE' => $races['Population_MOE'],
	            		'Uninsured' => $races['Uninsured'],
	            		'Uninsured_MOE' => $races['Uninsured_MOE'],
	            		'Uninsured_Pct' => $races['Uninsured_Pct'],
	            		'Uninsured_Pct_MOE' => $races['Uninsured_Pct_MOE']
					]);
			}
		}  
    	//population_hh
		if ($request->get('update_type') == 'roi') {
			# code...
			foreach ($request->get('data') as $roi) {
				# code...
				$test = population_hh::where('id', '=', $roi['id'])
					->update([
	            		'Population' => $roi['Population'],
	            		'Population_MOE' => $roi['Population_MOE'],
	            		'Uninsured' => $roi['Uninsured'],
	            		'Uninsured_MOE' => $roi['Uninsured_MOE'],
	            		'Uninsured_Pct' => $roi['Uninsured_Pct'],
	            		'Uninsured_Pct_MOE' => $roi['Uninsured_Pct_MOE']
					]);
			}
		}
    	//population_hh
		if ($request->get('update_type') == 'poverty') {
			# code...
			foreach ($request->get('data') as $poverty) {
				# code...
				$test = population_poverty::where('id', '=', $poverty['id'])
					->update([
	            		'Population' => $poverty['Population'],
	            		'Population_MOE' => $poverty['Population_MOE'],
	            		'Uninsured' => $poverty['Uninsured'],
	            		'Uninsured_MOE' => $poverty['Uninsured_MOE'],
	            		'Uninsured_Pct' => $poverty['Uninsured_Pct'],
	            		'Uninsured_Pct_MOE' => $poverty['Uninsured_Pct_MOE']
					]);
			}
		}  	  	
    	return response()->json([
    		'data' => $test
    	]);
    }
    //genders
    // public function updateGenders(Request $request) {

    // 	$test = 0;
    // 	if ($request->get('update_type') == 'gender') {
    // 		# code...
    // 		foreach ($request->get('data') as $gender) {
    // 			# code...
    // 			$test = population_gender::where('id', '=', $gender['id'])
    // 				->update([
    //             		'Population' => $gender['Population'],
    //             		'Population_MOE' => $gender['Population_MOE'],
    //             		'Uninsured' => $gender['Uninsured'],
    //             		'Uninsured_MOE' => $gender['Uninsured_MOE'],
    //             		'Uninsured_Pct' => $gender['Uninsured_Pct'],
    //             		'Uninsured_Pct_MOE' => $gender['Uninsured_Pct_MOE']
    // 				]);
    // 		}
    // 	}
    // 	return response()->json([
    // 		'data' => $test
    // 	]);
    // }
}
