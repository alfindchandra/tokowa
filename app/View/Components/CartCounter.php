<?php
// app/View/Components/CartCounter.php
namespace App\View\Components;

use App\Models\Cart;
use Illuminate\View\Component;

class CartCounter extends Component
{
    public $count;

    public function __construct()
    {
        $this->count = Cart::where('user_id', auth()->id())
                          ->where('status', 'active')
                          ->first()?->items
                          ->count() ?? 0;
    }

    public function render()
    {
        return view('components.cart-counter');
    }
}