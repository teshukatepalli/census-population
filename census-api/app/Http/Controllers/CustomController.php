<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\population;
use App\population_age;
use App\population_gender;
use App\population_ror;
use App\population_hh;
use App\population_poverty;
use App\User;

class CustomController extends Controller
{
	//user Data
    public function newUser(Request $request) {
    	User::create([
    		'name' => $request->get('name'),
    		'email' => $request->get('email'),
    		'password' => $request->get('password'),
    		'user_type' => $request->get('user_type'),
    		'county_id' => $request->get('county_id'),
    	]);
    	return response()->json([
    	    'success' => true,
    	    'user' => $request->all()
    	]);
    }

    //Profile Details
    public function users()
    {   
        return response()->json([
            'success' => true,
            'users' => User::all()
        ]);
    }





	//update_all
    public function updateAll(Request $request) {

    	$test = 0;
    	if ($request->get('update_type') == 'age') {
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
    	//population_poverty
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

    //add_all
        public function addAll(Request $request) {

        	$test = 0;
        	if ($request->get('create_type') == 'age') {
        		# code...
    			$test = population_age::create([
    					'county_id' => $request->get('county_id'),
    					'age_from' => $request->get('age_from'),
    					'age_to' => $request->get('age_to'),
                		'Population' => $request->get('Population'),
                		'Population_MOE' => $request->get('Population_MOE'),
                		'Uninsured' => $request->get('Uninsured'),
                		'Uninsured_MOE' => $request->get('Uninsured_MOE'),
                		'Uninsured_Pct' => $request->get('Uninsured_Pct'),
                		'Uninsured_Pct_MOE' => $request->get('Uninsured_Pct_MOE')
    				]);
        	}
        	//gender
        	if ($request->get('create_type') == 'gender') {
        		# code...
    			$test = population_gender::create([
    					'county_id' => $request->get('county_id'),
    					'gender' => $request->get('gender'),
                		'Population' => $request->get('Population'),
                		'Population_MOE' => $request->get('Population_MOE'),
                		'Uninsured' => $request->get('Uninsured'),
                		'Uninsured_MOE' => $request->get('Uninsured_MOE'),
                		'Uninsured_Pct' => $request->get('Uninsured_Pct'),
                		'Uninsured_Pct_MOE' => $request->get('Uninsured_Pct_MOE')
    				]);
        	}
        	//Races
    		if ($request->get('create_type') == 'races') {
				# code...
				$test = population_ror::create([
						'county_id' => $request->get('county_id'),
						'ror_label' => $request->get('ror_label'),
	            		'Population' => $request->get('Population'),
	            		'Population_MOE' => $request->get('Population_MOE'),
	            		'Uninsured' => $request->get('Uninsured'),
	            		'Uninsured_MOE' => $request->get('Uninsured_MOE'),
	            		'Uninsured_Pct' => $request->get('Uninsured_Pct'),
	            		'Uninsured_Pct_MOE' => $request->get('Uninsured_Pct_MOE')
					]);
    		}  
        	//population_hh
    		if ($request->get('create_type') == 'roi') {
    				# code...
    				$test = population_hh::create([
    						'county_id' => $request->get('county_id'),
    						'income_from' => $request->get('income_from'),
    						'income_to' => $request->get('income_to'),
    	            		'Population' => $request->get('Population'),
    	            		'Population_MOE' => $request->get('Population_MOE'),
    	            		'Uninsured' => $request->get('Uninsured'),
    	            		'Uninsured_MOE' => $request->get('Uninsured_MOE'),
    	            		'Uninsured_Pct' => $request->get('Uninsured_Pct'),
	            			'Uninsured_Pct_MOE' => $request->get('Uninsured_Pct_MOE')
    					]);
    		}
        	//population_hh
    		if ($request->get('create_type') == 'poverty') {
    			# code...
				$test = population_poverty::create([
						'county_id' => $request->get('county_id'),
						'line_from' => $request->get('line_from'),
						'line_to' => $request->get('line_to'),
	            		'Population' => $request->get('Population'),
	            		'Population_MOE' => $request->get('Population_MOE'),
	            		'Uninsured' => $request->get('Uninsured'),
	            		'Uninsured_MOE' => $request->get('Uninsured_MOE'),
	            		'Uninsured_Pct' => $request->get('Uninsured_Pct'),
	            		'Uninsured_Pct_MOE' => $request->get('Uninsured_Pct_MOE')
					]);
    		}  	  	
        	return response()->json([
        		'data' => $test
        	]);
        }
}
