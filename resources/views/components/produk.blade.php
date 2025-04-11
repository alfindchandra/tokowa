<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 justify-center text-center">
            <h2 class="text-5xl text-primary font-bold my-10 font-caveat">Produk</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-sm font-medium text-gray-500">Nama</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-sm font-medium text-gray-500">Kategori</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-sm font-medium text-gray-500">Harga</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-sm font-medium text-gray-500">Tanggal Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($latestProducts as $product)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $product->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $product->categori }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $product->updated_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="{{ route('home.produk') }}" class="group relative inline-flex h-[calc(48px+8px)] items-center justify-center rounded-full bg-primary py-1 pl-6 pr-14 font-medium text-neutral-50"><span class="z-10 pr-2">Lanjut Belanja</span><div class="absolute right-1 inline-flex h-12 w-12 items-center justify-end rounded-full bg-teal-800 transition-[width] group-hover:w-[calc(100%-8px)]"><div class="mr-3.5 flex items-center justify-center"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-50"><path d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></div></div></a>
            </div>
        </div>