<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categori;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function produk(Request $request)
     {
       $query = Product::query();

        // Filter berdasarkan kategori
        if ($request->has('category') && $request->category != '') {
            $query->where('categori', $request->category);
        }

        // Pencarian berdasarkan nama atau deskripsi
        if ($request->has('search') && $request->search != '') {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        $products = $query->paginate(10); 
        $categories = Categori::all();

        return view('dashboard/produktoko', compact('products', 'categories'));
    
     }
     public function tentang()
     {
        return view('dashboard/tentang');
     }

     public function kontak()
     {
        return view('dashboard/kontak');
     }


public function keranjang()
    {
        $cart = Cart::firstOrCreate(
            ['user_id' => auth()->id(), 'status' => 'active'],
            ['user_id' => auth()->id()]
        );
        
        return view('dashboard/keranjang', compact('cart'));
    }

public function addToCart(Request $request, Product $product)
{
    $cart = Cart::firstOrCreate(
        ['user_id' => auth()->id(), 'status' => 'active'],
        ['user_id' => auth()->id()]
    );

    $cartItem = CartItem::firstOrNew([
        'cart_id' => $cart->id,
        'product_id' => $product->id
    ]);

    $cartItem->quantity = ($cartItem->quantity ?? 0) + 1;
    $cartItem->save();

    return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang');
}

    public function updateQuantity(Request $request, CartItem $cartItem)
    {
        $cartItem->update([
            'quantity' => $request->quantity
        ]);

        return redirect()->back()->with('success', 'Jumlah produk diperbarui');
    }

    public function removeItem(CartItem $cartItem)
    {
        $cartItem->delete();
        return redirect()->back()->with('success', 'Produk dihapus dari keranjang');
    }

    public function checkout(Request $request)
    {
        $cart = Cart::with(['items.product'])->findOrFail($request->cart_id);
        
        // Menyiapkan pesan WhatsApp
        $message = "Mbk, saya ingin memesan:\n\n";
        
        foreach ($cart->items as $item) {
            $message .= "{$item->product->name} - {$item->quantity} x Rp " . 
                       number_format($item->product->price, 0, ',', '.') . "\n";
        }
        
        $message .= "\nTotal: Rp " . number_format($cart->getTotalPrice(), 0, ',', '.');
        
        // Encode pesan untuk URL WhatsApp
        $encodedMessage = urlencode($message);
        $whatsappNumber = "+6281382176161"; 
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";
        
        // Update status cart
        $cart->update(['status' => 'checkout']);
        
        return redirect()->away($whatsappUrl);
    }
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $categori = Categori::all();
    return view('admin/index', compact('categori'));
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
        $Product->image = null; 
    }

    // Simpan data produk
    $product->name = $validated['name'];
    $product->categori = $validated['categori'];
    $product->description = $validated['description'];
    $product->price = $validated['price'];

    $product->save();

    return redirect()->route('admin.tambah')->with('success', 'Product created successfully');
}
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
