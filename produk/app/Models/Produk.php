<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    // use HasFactory;

    // nama db dosen harus sama dgn yg di migration
    protected $table = "produk";

    // fillable yg bisa di isi apa aja gtuu
    protected $fillable = ['nama_produk', 'harga', 'stok'];

}
