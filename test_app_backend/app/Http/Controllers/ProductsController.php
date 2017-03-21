<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }  
    
    public function store(Request $request)
    { 
        $product = Product::create($request->all() + ['user_id' => Auth::id()]);
        
        return $product;
    }
    
    public function show($id)
    {
        return response()->json(Product::find($id));
    }   

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        
        $product->update($request->all());
        
        return response()->json($product);
    }        

    public function destroy($id)
    {
        try {
            Product::destroy($id);
            
            return response([], 204);
        } catch (\Exception $e) {
            return response(['egrgergerege', 500]);
        }
    }
}
