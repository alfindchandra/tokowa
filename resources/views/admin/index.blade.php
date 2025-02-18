<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
          @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
   <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Tambah Data</h2>
                
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name Produk</label>
                        <input type="text" name="name" id="name" required 
                            class="mt-1 block w-full rounded-md border-2 p-1 border-black shadow-sm focus:border-black focus:ring-black">
                    </div>
                    <div>
                        <label for="categori" class="block text-sm font-medium text-gray-700">Kategori Produk</label>
                         <select name="categori" class="w-full border-black " id="categori">
                            @foreach($categori as $cat)
                                <option value="{{$cat->name}}">{{$cat->name}}</option>
                            @endforeach
                        </select> 
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="4" required
                            class="mt-1 block w-full rounded-md border-2 p-1 border-black shadow-sm focus:border-black focus:ring-black"></textarea>
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" name="price" id="price" step="0.01" required
                                class="block w-full rounded-md border-2 p-1 border-black pl-7 pr-12 focus:border-black focus:ring-black">
                        </div>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                        <div class="mt-1 flex items-center">
                            <input type="file" name="image" id="image" accept="image/*"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        </div>
                    </div>

                    <div class="flex items-center justify-end pt-7">
                        <button type="submit" 
                            class="bg-black hover:bg-slate-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
