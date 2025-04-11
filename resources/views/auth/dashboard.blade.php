<!-- resources/views/admin/dashboard.blade.php -->
@extends('auth.layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Dashboard Admin</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Total Products Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-500 text-sm">Total Produk</div>
                <div class="text-3xl font-bold text-indigo-600">{{ $totalProducts }}</div>
            </div>
            
            <!-- Total Categories Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-500 text-sm">Total Kategori</div>
                <div class="text-3xl font-bold text-indigo-600">{{ $totalCategories }}</div>
            </div>
            
            <!-- Action Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-500 text-sm">Kelola Produk</div>
                <div class="mt-2">
                    <a href="{{ route('admin.products.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded inline-block">Tambah Produk Baru</a>
                </div>
            </div>
        </div>
        
        <!-- Latest Products -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Produk Terbaru</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500">Nama</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500">Kategori</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500">Harga</th>
                            <th class="py-2 px-4 border-b border-gray-200 bg-gray-50 text-left text-sm font-medium text-gray-500">Tanggal Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($latestProducts as $product)
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $product->name }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $product->categori }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $product->created_at->format('d M Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.products') }}" class="text-indigo-600 hover:text-indigo-800">Lihat semua produk →</a>
            </div>
        </div>
    </div>
</div>
@endsection