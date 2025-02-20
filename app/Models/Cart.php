<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'status'];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function getTotalPrice()
    {
        return $this->items->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
    }
    public static function getUserCartItemCount()
{
    return static::where('user_id', auth()->id())
                 ->where('status', 'active')
                 ->first()?->items
                 ->count() ?? 0;
}

}
