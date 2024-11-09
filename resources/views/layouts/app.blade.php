<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Products</title>  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
</head>  
<body class="bg-gray-100 p-8">  

    <div class="container mx-auto">  
        <h1 class="text-2xl font-bold mb-4"><a href="{{ route('products.index') }}">Products</a> </h1>  


        <main>  
            @yield('content')  
        </main>  
    

         
       
       
         
        
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script> 

</body>  
</html>