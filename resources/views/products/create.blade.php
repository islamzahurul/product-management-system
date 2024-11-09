@extends('layouts.app')  

@section('content')  
   
    <div class="container mx-auto bg-white rounded-lg shadow-md p-6">  
        <h1 class="text-xl font-semibold mb-4">Product / <span class="text-blue-500">Add new product</span></h1>  
        
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data" > 

            @csrf 
            <div class="mb-4">  
                <label class="block text-gray-700">Product Name</label>  
                <input type="text" placeholder="Product Name" name="name" class="border rounded-lg w-full py-2 px-3 mt-1">  
            </div>  
            <div class="mb-4">  
                <label class="block text-gray-700">Product Description</label>  
                <textarea placeholder="Product description" name="description" class="border rounded-lg w-full py-2 px-3 mt-1" rows="4"></textarea>  
            </div>  
            <div class="grid grid-cols-2 gap-4 mb-4">  
                <div>  
                    <label class="block text-gray-700">Price</label>  
                    <input type="text" placeholder="Price" name="price" required step="0.01" class="border rounded-lg w-full py-2 px-3 mt-1">  
                </div>  
                <div>  
                    <label class="block text-gray-700">Stock</label>  
                    <input type="number" placeholder="Stock" name="stock" class="border rounded-lg w-full py-2 px-3 mt-1">  
                </div>  
            </div>  
            <div class="mb-4">  
                <label class="block text-gray-700">Product ID</label>  
                <input type="text" name="product_id" placeholder="Product ID" class="border rounded-lg w-full py-2 px-3 mt-1">  
            </div>  
            <div class="mb-4">  
                <label class="block text-gray-700">Product Image</label>  
                <div class="flex items-center justify-between mt-1">  
                    <input type="file"  name ="image" class="border rounded-lg py-2 px-3 w-3/4">   
                </div>  
            </div>  
            <div class="flex justify-end">  
                <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Create</button>  
            </div>  
        </form>  
    </div>  



@endsection