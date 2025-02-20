<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
       @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('image/tokowa2.png') }}" type="image/x-icon">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400&display=swap" rel="stylesheet">
</head>
<body>
        @include('components.navbar')

         <div class="container mt-4">
               @yield('tentang')
               @yield('kontak')
               @yield('produk')
               @yield('keranjang')
         </div>



</body>
</html>