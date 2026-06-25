<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    // Tambahkan baris ini di bawah ini:
    protected $fillable = ['merk', 'tipe', 'harga', 'stok', 'deskripsi'];
}