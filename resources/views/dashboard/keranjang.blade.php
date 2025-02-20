 
 @extends('dashboard.navbarpro')


@section('keranjang')
 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-6">Keranjang Belanja</h2>

                    @if($cart->items->count() > 0)
                        <div class="space-y-4">
                            @foreach($cart->items as $item)
                                <div class="flex items-center justify-between border-b pb-4">
                                    <div class="flex-1">
                                        <h3 class="text-lg font-semibold">{{ $item->product->name }}</h3>
                                        <p class="text-indigo-600 font-bold">
                                            Rp {{ number_format($item->product->price, 0, ',', '.') }}
                                        </p>
                                    </div>

                                    <div class="flex items-center space-x-4">
                                        <form method="POST" action="{{ route('cart.update-quantity', $item) }}" class="flex items-center">
                                            @csrf
                                            @method('PATCH')
                                            <select name="quantity" 
                                                    onchange="this.form.submit()"
                                                    class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                                @for($i = 1; $i <= 10; $i++)
                                                    <option value="{{ $i }}" {{ $item->quantity == $i ? 'selected' : '' }}>
                                                        {{ $i }}
                                                    </option>
                                                @endfor
                                            </select>
                                        </form>

                                        <form method="POST" action="{{ route('cart.remove-item', $item) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="text-red-600 hover:text-red-800">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                            <div class="mt-6 border-t pt-4">
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">Total:</span>
                                    <span class="text-2xl font-bold text-indigo-600">
                                        Rp {{ number_format($cart->getTotalPrice(), 0, ',', '.') }}
                                    </span>
                                </div>

                                <form method="POST" action="{{ route('cart.checkout') }}" class="mt-6">
                                    @csrf
                                    <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                                    <button type="submit" 
                                            class="w-full bg-green-500 text-white py-3 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                        Checkout via WhatsApp
                                    </button>
                                </form>
                                <a href="{{ route('home.produk') }}" 
                               class="mt-4 inline-block text-center bg-primary text-white hover:text-indigo-800 w-full py-3 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                Kembali Belanja Belanja
                            </a>
                            </div>
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500">Keranjang belanja Anda kosong</p>
                            <a href="{{ route('home.produk') }}" 
                               class="mt-4 inline-block text-indigo-600 hover:text-indigo-800">
                                Lanjutkan Belanja
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection