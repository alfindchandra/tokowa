@extends('dashboard.navbarpro')

@section('produk')
<div class="container py-10 ">
    <div class="container px-4 p-4 md:max-w-7xl mx-auto">
          
      <!-- Form Pencarian & Filter Kategori -->
    <form method="GET" action="{{ route('home.produk') }}" class="mb-4 flex bg-primary p-2 rounded-lg shadow-md">
        <select name="category" class="p-2 border bg-gray-100 rounded-l-xl">
            <option value="">Semua Kategori</option>
            @foreach ($categories as $category)
                <option value="{{ $category->name }}" {{ request('category') == $category->name ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select> 
        <input 
            type="text" 
            name="search" 
            placeholder="Cari produk..." 
            value="{{ request('search') }}"
            class="p-2 border border-primary rounded w-full hover:border-primary focus:border-primary focus:outline-none"
        >
      
       
        <button type="submit" class=" flex items-center text-white px-4 py-2 gap-2">
          <span> <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg></span>  Cari</button>
    </form>
    <h1 class=" text-xs md:text-sm italic mb-4 -mt-2 ml-5 text-gray-500">NB: Jika ingin mencari menurut kategori kosongkan pencarian dan Jika ingin mencari dipencarian pilih semua kategori</h1>
    
    <!-- Daftar Produk -->
    <div class="bg-white shadow-md rounded-lg p-4">
        @foreach ($products as $product)
           <div class="border-b border-gray-200 pb-4 last:border-b-0 py-2">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ $product->name }}
                            <span class="text-sm text-gray-700"> {{ $product->description }}</span>
                        </h3>
                    </div>
                    <div class="flex items-center gap-4">
                        <p class="text-lg font-bold text-primary">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                        <form method="POST" action="{{ route('cart.add', $product) }}" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/80 transition-colors">
                                + Keranjang
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Pagination stays the same -->
    </div>
</div>
</div>

@if(session('success'))
<div id="alert" class="fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg">
    {{ session('success') }}
</div>
<script>
    setTimeout(() => {
        document.getElementById('alert').style.display = 'none';
    }, 3000);
</script>
@endif

<!-- Floating Cart Icon -->
<a href="{{ route('cart.keranjang') }}" class="fixed bottom-6 right-6 bg-primary text-white p-4 rounded-full shadow-lg hover:bg-primary/80 transition-transform transform hover:scale-105">
    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.4 2.8a1 1 0 0 0 .9 1.4h11.2a1 1 0 0 0 .9-1.4L17 13M7 13h10M10 21a1 1 0 1 1-2 0 1 1 0 0 1 2 0m8 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
    </svg>
   
</a>

@endsection
