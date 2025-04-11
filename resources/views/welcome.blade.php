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
        @include('components.jumbotron')
        @include('components.kerjasama')
        @include('components.produk')
        @include('components.accordion')
        @include('components.maps')
        @include('components.footer')

</body>
<!-- In your layout file -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</html>