<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)  
    {  
        $query = Product::query();  

       
        if ($request->filled('search')) {  
            $query->where('product_id', 'like', '%' . $request->search . '%')  
                  ->orWhere('description', 'like', '%' . $request->search . '%');  
        }  

       
        if ($request->filled('sort')) {  
            $sort = $request->sort;  
            $query->orderBy($sort, 'asc');  
        }  

        $products = $query->paginate(10);  
        return view('products.index', compact('products'));  
    }  

    public function create()  
    { 
        
        return view('products.create');  
    }  

    public function store(Request $request)  
    {  
        $validated = $request->validate([  
            'product_id' => 'required|string | max:255|unique:products,product_id',  
            'name' => 'required |string | max:255',  
            'description' => 'nullable',  
            'price' => 'required|numeric',  
            'stock' => 'nullable|integer',  
            'image' => 'required|image ',  
        ]); 
         
        // $imagePath = null;
        // if ($request->has('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $imagePath = $image->storeAs('images', $imageName, 'public');
           
        // } 
        $path = null;
        if ($request->hasFile('image')) {
            
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        }


 


        Product::create($validated);  
        return redirect()->route('products.index')->with('success', 'Product created successfully.');  
    }  

    public function show($id)  
    {  
        $product = Product::findOrFail($id);  
        return view('products.show', compact('product'));  
    }  

    public function edit($id)  
    {  
        $product = Product::findOrFail($id);  
        return view('products.edit', compact('product'));  
    }  

    public function update(Request $request, $id)  
    {  
        $validated = $request->validate([  
            'product_id' => 'required|unique:products,product_id,' . $id,  
            'name' => 'required',  
            'description' => 'nullable',  
            'price' => 'required|numeric',  
            'stock' => 'nullable|integer',  
            'image' => 'nullable|image',  
        ]);  

        $product = Product::findOrFail($id);  
        $product->update($validated);  
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');  
    }  

    public function destroy($id)  
    {  
        $product = Product::findOrFail($id);  
        $product->delete();  
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');  
    }  
}
