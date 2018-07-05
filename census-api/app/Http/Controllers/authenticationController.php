<?php

namespace App\Http\Controllers;

use DB;
use JWTAuth;
use App\User;
use Mail;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class authenticationController extends Controller
{

    public function login(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|max:255',
        'password'=> 'required'
      ]);

      if ($validator->fails()) {
          return response()->json([
            'success' => false,
            'errors' => $validator->errors()
            ]);
      }

      $credentials = $request->only('email', 'password');

      try {
          if (! $token = JWTAuth::attempt($credentials)) {
              return response()->json([
                'success' => false,
                'message' => 'Invalid Login Details'
                ], 401);
          }
      } catch (JWTException $e) {
          return response()->json([
            'success' => false,
            'message' => 'could_not_create_token'
            ], 500);
      }
      $userdetails = JWTAuth::toUser($token);
      $token = compact('token');

      return response()->json([
        'success' => true,
        'token' => $token['token'],
        'profile' => $userdetails
        ]);
    }


    // signup user 
    //register
    public function register(Request $request)
    {
      $validator = Validator::make($request->all(), [
          'email' => 'required|string|email|max:255|unique:users',
          'name' => 'required',
          'password'=> 'required',
          'mobile'=> 'required'
      ]);
      if ($validator->fails()) {
          return response()->json(
            ['success' => false,
            'errors' => $validator->errors()
            ], 422);
      }
      $user = User::create([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password')),
          'mobile' => $request->get('mobile'),
          'user_type' => 'county',
          'county_id' => $request->get('mobile'),
          'status' => 'Active'
      ]);

      return response()->json([
        'success' => true,
        'message' => 'Registered Sucessfully. Please go to Login Page'
        ]);
    }
}