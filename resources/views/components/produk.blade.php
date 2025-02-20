<div class="p-6">
    <div class="max-w-6xl mx-auto p-6 rounded-lg shadow-lg">
        <h1 class="text-5xl font-bold mb-4 font-caveat text-center text-primary">Daftar Produk</h1>
        <p class=" text-gray-600 text-lg text-center max-w-3xl mx-auto">Kami menyediakan berbagai macam produk berkualitas tinggi dengan harga terjangkau.</p>
        <div class="grid grid-cols-3 gap-4 my-10">
            @foreach($products as $product)
                <a href="" class="border p-4 rounded-lg shadow-lg bg-teal-100">
                    <img src="{{ asset('products/' . $product->image) }}" class="w-full h-48 object-cover rounded-lg mb-2">
                    <h2 class="text-lg font-semibold">{{ $product->name }} <span class="text-sm text-gray-700"> {{ $product->description }}</span></h2>
                    <p class="text-gray-600">{{ $product->categori }}</p>
                    <p class="text-black font-bold mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>