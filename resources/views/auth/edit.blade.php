<!-- resources/views/admin/products/edit.blade.php -->
@extends('auth.layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Edit Produk</h1>
            <a href="{{ route('admin.products') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Kembali</a>
        </div>
        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-2 p-1 border-gray-500 shadow-sm focus:border-black focus:ring-black" value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                   <div class="mb-4">
                    <label for="categori" class="block text-sm font-medium text-gray-700">Kategori</label>
                    <select name="categori" class="mt-1 block w-full rounded-md border-2 p-1 border-gray-500 shadow-sm focus:border-black focus:ring-black" id="categori">
                        @foreach($categories as $cat)   
                            <option value="{{ $cat->name }}" {{ old('categori', $product->categori) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select> 
                    @error('categori')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                    
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="text" name="price" id="price" class="mt-1 block w-full rounded-md border-2 p-1 pl-10 pr-10 border-gray-500 shadow-sm focus:border-black focus:ring-black [&::-webkit-inner-spin-button]:appearance-none [appearance:textfield]" value="{{ old('price', rtrim(rtrim(number_format($product->price, 2, ',', '.'), '0'), ',')) }}" required>
                        </div>
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-2 p-1 border-gray-500 shadow-sm focus:border-black focus:ring-black" required>{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                        @if($product->image)
                        <div class="mt-2 mb-2">
                            <img src="{{ asset('products/'.$product->image) }}" alt="{{ $product->name }}" class="h-32 w-32 object-cover rounded">
                            <p class="text-sm text-gray-500 mt-1">Gambar saat ini. Unggah gambar baru untuk mengganti.</p>
                        </div>
                        @endif
                        <div class="mt-1 flex items-center">
                            <input type="file" name="image" id="image" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" accept="image/*">
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF (Maks. 2MB)</p>
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Perbarui Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection