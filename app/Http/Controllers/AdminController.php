<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
       public function login()
    {
        return view('auth.login'); 
    }

    public function loginsave(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard'); 
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    public function dashboard()
    {
       
        $totalProducts = Product::count();
        $totalCategories = Product::distinct('categori')->count();
        $latestProducts = Product::latest()->take(5)->get();
        
        return view('auth.dashboard', compact('totalProducts', 'totalCategories', 'latestProducts'));
    }
     public function products()
    {
        $products = Product::latest()->paginate(10);
        return view('auth.index', compact('products'));
    }
     public function categori()
    {
        $category = Categori::all();
        return view('auth.categori',compact('category'));
    }
    
    public function create()
    {
        $categori = Categori::all();
        return view('auth.create',compact('categori'));
    }
    public function createcat()
    {
        
        return view('auth.createcategori');
    }
 
    
    public function storecat(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $categori = new Categori();

     

        $categori->name = $validated['name'];
  

        $categori->save();

        return redirect()->route('admin.categori')->with('success', 'Produk berhasil ditambahkan');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'categori' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = new Product();

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('products/'), $filename);
            $product->image = $filename;
        } else {
            $product->image = null; // Fixed typo here from $Product to $product
        }

        // Simpan data produk
        $product->name = $validated['name'];
        $product->categori = $validated['categori'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];

        $product->save();

        return redirect()->route('admin.products')->with('success', 'Produk berhasil ditambahkan');
    }
    
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Categori::all();

        return view('auth.edit', compact('product','categories'));
    }
    
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'categori' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $product = Product::findOrFail($id);

        // Update gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                $oldImagePath = public_path('products/'.$product->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            // Upload gambar baru
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('products/'), $filename);
            $product->image = $filename;
        }

        // Update data produk
        $product->name = $validated['name'];
        $product->categori = $validated['categori'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];

        $product->save();

        return redirect()->route('admin.products')->with('success', 'Produk berhasil diperbarui');
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($product->image) {
            $imagePath = public_path('products/'.$product->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        
        // Hapus produk
        $product->delete();
        
        return redirect()->route('admin.products')->with('success', 'Produk berhasil dihapus');
    }
    public function destroycat($id)
    {
        $category = Categori::findOrFail($id);
        
         
        
        // Hapus produk
        $category->delete();
        
        return redirect()->route('admin.categori')->with('success', 'Produk berhasil dihapus');
    }

}
