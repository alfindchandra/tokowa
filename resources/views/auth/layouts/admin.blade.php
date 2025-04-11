<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Toko Online</title>
    <link rel="stylesheet" href="style.css">
    
    
    


   <script src="https://cdn.tailwindcss.com"></script>

  
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('image/tokowa2.png') }}" type="image/x-icon">
    
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 z-50 left-0 w-64 bg-gray-800 transform transition-transform duration-300 lg:translate-x-0 lg:static"
             :class="{'translate-x-0': sidebarOpen, '-translate-x-full': !sidebarOpen}">
            <div class="flex items-center justify-center mt-6">
                <span class="text-white text-2xl font-semibold">Admin Panel</span>
            </div>
            <nav class="mt-10">
                <a class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-200"
                   href="{{ route('admin.dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" id="dashboard" class="w-6 h-6 fill-slate-300">
  <path fill="none" d="M0 0h24v24H0V0z"></path>
  <path d="M4 13h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zm0 8h6c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1zm10 0h6c.55 0 1-.45 1-1v-8c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1zM13 4v4c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1z"></path>
</svg>
                    <span class="ml-3">Dashboard</span>
                </a>
                <a class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-200"
                   href="{{ route('admin.products') }}">
                   <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M10 12v1h4v-1m4 7H6a1 1 0 0 1-1-1V9h14v9a1 1 0 0 1-1 1ZM4 5h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
</svg>

                    <span class="ml-3">Produk</span>
                </a>
                <a class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white transition duration-200"
                   href="{{ route('admin.categori') }}">
                   <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 5h6m-6 4h6M10 3v4h4V3h-4Z"/>
</svg>

                    <span class="ml-3">Categori</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
           <header class="flex justify-between items-center p-4 bg-white shadow-md">
    <!-- Tombol untuk membuka sidebar di layar kecil -->
    <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none lg:hidden">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Dropdown Logout -->
    <div x-data="{ dropdownOpen: false }" class="relative">
        <button @click="dropdownOpen = !dropdownOpen" @click.away="dropdownOpen = false"
            class="flex items-center space-x-2 px-4 py-2 rounded-lg bg-gray-100 hover:bg-gray-200 transition focus:outline-none">
            <!-- Ikon Profil -->
            <svg class="h-6 w-6 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="7" r="4"></circle>
                <path d="M12 14c-4 0-8 2-8 4v2h16v-2c0-2-4-4-8-4z"></path>
            </svg>
            <!-- Nama Pengguna -->
            <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span>
        </button>

        <!-- Dropdown menu -->
        <div x-show="dropdownOpen" x-transition 
            class="absolute right-0 md:left-0 mt-2 w-48 bg-white rounded-md shadow-lg z-50"
            style="display: none;">
            <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                @csrf
                <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200">
                    Sign out
                </button>
            </form>
        </div>
    </div>
</header>
            <!-- Main content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
  
    
</body>

</html>
