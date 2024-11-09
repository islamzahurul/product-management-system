@extends('layouts.app')  

@section('content')  
    <h1> Product Name : {{ $product->name }}</h1>  
    <p>Product Description : {{ $product->description }}</p>  
    <p>Price : {{ $product->price }}</p>  
    <p>Stock : {{ $product->stock }}</p>  
    <img src="{{ Storage::url($product->image) }}"alt="{{ $product->name }}" class="img-thumbnail"width="100" height="100" style="max-width: 100px;">

    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">  
    <a href="{{ route('products.index') }}">Back to Products</a>  
@endsection