<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Validator;

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
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $user = new User([
           'name' => $request->input('name'),
            'phone' => $request->input('phone'),
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
        
        $user->update([
                'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
                ]);
        
        return response()->json($user);
    }
    
     public function destroy($id)
    {
        try {
            User::destroy($id);
            
            return response([], 204);
        } catch (\Exception $e) {
            return response(['egrgergerege', 500]);
        }
    }
    
}