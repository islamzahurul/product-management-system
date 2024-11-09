@extends('layouts.app')  

@section('content') 


    <form class="mb-4 flex justify-between items-center" method="GET" action="{{ route('products.index') }}">  
        <input type="text" name="search" placeholder="Search by Product ID or Product Name" value="{{ request('search') }}" class="border rounded-lg py-2 px-4 w-1/3 text-gray-700">  
        <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Search</button>  
        <a class="bg-blue-500 text-white rounded-lg px-4 py-2" href="{{ route('products.create') }}">Create New Product</a>  
    </form> 


    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">  
        <thead>  
            <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">  
                <th class="py-3 px-6 text-left" ><a href="{{ route('products.index', ['sort' => 'id']) }}">ID</a></th>  
                <th class="py-3 px-6 text-left" ><a href="{{ route('products.index', ['sort' => 'name']) }}">Name</a></th>  
                <th class="py-3 px-6 text-left" ><a href="{{ route('products.index', ['sort' => 'Product_id']) }}">Product ID</a></th>  
                <th class="py-3 px-6 text-left" ><a href="{{ route('products.index', ['sort' => 'image']) }}">Image</a></th>  
                <th class="py-3 px-6 text-left" ><a href="{{ route('products.index', ['sort' => 'stock']) }}">Stock</a></th>  
                <th class="py-3 px-6 text-left"><a href="{{ route('products.index', ['sort' => 'price']) }}">Price</a></th>  
                <th>Actions</th>  
            </tr>  
        </thead>  
        <tbody class="text-gray-600 text-sm font-light">  
            @foreach ($products as $product)  
                <tr class="border-b border-gray-200 hover:bg-gray-100">  
                    <td class="py-3 px-6 text-left ">{{ $product->id }}</td>  
                    <td class="py-3 px-6 text-left">{{ $product->name }}</td>  
                    <td class="py-3 px-6 text-left">{{ $product->Product_id }}</td>                   
                 
                    <td class="py-3 px-6 text-left"> <img src="{!! asset('storage/images/'.$product->image) !!} " alt="">  </td> 
                    <td class="py-3 px-6 text-left">{{ $product->stock }}</td>
                    <td class="py-3 px-6 text-left">{{ $product->price }}</td>

                    <td>  
                        <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:text-green-700">View</a>  
                        <a   href="{{ route('products.edit', $product->id) }}" class="text-green-500 hover:text-green-700" >Edit</a>  
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">  
                            @csrf  
                            @method('DELETE')  
                            <button class="text-red-500 hover:text-red-700" type="submit">Delete</button>  
                        </form>  
                    </td>  
                </tr>  
            @endforeach  
        </tbody>  
    </table>  

    {{ $products->links() }}  

@endsection