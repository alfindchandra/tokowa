@extends('auth.layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Tambah Categori Baru</h1>
            <a href="{{ route('admin.products') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Kembali</a>
        </div>
        
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg md:w-2/4">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('admin.categori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Categori</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-2 p-1 border-gray-500 shadow-sm focus:border-black focus:ring-black" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    
                   
                    
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Simpan Categori
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection