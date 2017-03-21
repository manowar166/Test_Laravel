<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }   

        public function signup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = new User([
           'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        return response()->json([
           'message' => 'Successfully' 
        ], 201);
    }
    
    public function show($id)
    {
        return response()->json(User::find($id));
    }   
    
     public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->update($request->all());
        
        return response()->json($user);
    }        
    
}