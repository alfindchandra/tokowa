<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'description','categori', 'price', 'image'];
    public function categori()
{
    return $this->belongsTo(Categori::class, 'categori'); // atau 'categori_id' sesuai kolom di tabel
}
}
