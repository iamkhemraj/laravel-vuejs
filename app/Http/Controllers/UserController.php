<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
   //Create customer
   public function createUserRoute(Request $request)
   {
   
      // Validate the incoming request
      $validation = Validator::make($request->all(), [
         'name'     => 'required|string',
         'email'    => 'required|string|email|unique:users,email',
         'password' => 'required|string|min:8',
         'phone'    => 'required|digits:10',
      ]);

      // Handle validation errors (if any)
      if ($validation->fails()) {
         return response()->json(['errors' => $validation->errors()], 422);
      }

      $userData = new User();

      $userData->name     = $request->input('name');
      $userData->email    = $request->input('email');
      $userData->password = $request->input('password');
      $userData->phone    = $request->input('phone');
      $status = $userData->save();
      if($status){
         return response()->json(['message'=>'Register customer successfully', 'data'=> $status]);
      }
   
   }

   //Show all customer data
   public function getAllUsers(){
      $data = User::all();
      return response()->json(['message'=>'fetch data successful', 'data'=> $data]);
   }

  

 
}

