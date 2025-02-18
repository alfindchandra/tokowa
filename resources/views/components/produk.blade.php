<div class="p-6">
    <div class="max-w-6xl mx-auto bg-slate-300 p-6 rounded-lg shadow-lg">
        <h1 class="text-5xl font-bold mb-4 font-caveat text-center text-primary">Daftar Produk</h1>
        <div class="grid grid-cols-3 gap-4">
            @foreach($products as $product)
                <a href="" class="border p-4 rounded-lg shadow-md">
                    <img src="{{ asset('products/' . $product->image) }}" class="w-full h-48 object-cover rounded-lg mb-2">
                    <h2 class="text-lg font-semibold">{{ $product->name }} <span class="text-sm text-gray-700"> {{ $product->description }}</span></h2>
                    <p class="text-gray-600">{{ $product->categori }}</p>
                    <p class="text-blue-500 font-bold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>