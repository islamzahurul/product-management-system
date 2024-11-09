@extends('layouts.app')  

@section('content')  
    <h1>Edit Product</h1>  

    <div class="container mx-auto bg-white rounded-lg shadow-md p-6">  
        <h1 class="text-xl font-semibold mb-4">Edit Product </h1>  
        
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" > 

            @csrf 
            @method('PUT')
            <div class="mb-4">  
                <label class="block text-gray-700">Product Name</label>  
                <input type="text" placeholder="Product Name" name="name" value="{{ $product->name }}" required class="border rounded-lg w-full py-2 px-3 mt-1">  
            </div>  
            <div class="mb-4">  
                <label class="block text-gray-700">Product Description</label>  
                <textarea placeholder="Product description" name="description" value="{{ $product->description }}" class="border rounded-lg w-full py-2 px-3 mt-1" rows="4"></textarea>  
            </div>  
            <div class="grid grid-cols-2 gap-4 mb-4">  
                <div>  
                    <label class="block text-gray-700">Price</label>  
                    <input type="text" placeholder="Price" name="price" value="{{ $product->price }}" required step="0.01" class="border rounded-lg w-full py-2 px-3 mt-1">  
                </div>  
                <div>  
                    <label class="block text-gray-700">Stock</label>  
                    <input type="number" placeholder="Stock" name="stock" value="{{ $product->stock }}" class="border rounded-lg w-full py-2 px-3 mt-1">  
                </div>  
            </div>  
            <div class="mb-4">  
                <label class="block text-gray-700">Product ID</label>  
                <input type="text" name="product_id" value="{{ $product->product_id }}" placeholder="Product ID" class="border rounded-lg w-full py-2 px-3 mt-1">  
            </div>  
            <div class="mb-4">  
                <label class="block text-gray-700">Product Image</label>  
                <div class="flex items-center justify-between mt-1">  
                    <input type="file"  name ="image"  class="border rounded-lg py-2 px-3 w-3/4">   
                </div>  
            </div>  
            <div class="flex justify-end">  
                <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Update</button>  
            </div>  
        </form>  
    </div>  





@endsection