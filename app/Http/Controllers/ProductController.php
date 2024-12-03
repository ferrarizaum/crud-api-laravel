<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        try {
            $data = $request->validate([
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'description' => 'nullable'
            ]);
    
            // Attempt to create the new product
            $newProduct = Product::create($data);
    
            return redirect(route('product.index'));
        } catch (\Exception $e) {
            // Log the exception message for debugging
            \Log::error('Error saving product: ' . $e->getMessage());
            return back()->withErrors('An error occurred while saving the product.');
        }
    }
}