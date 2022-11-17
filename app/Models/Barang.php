<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nama_barang',
        'jenis_id',
        'harga_beli',
        'harga_jual',
        'stok',
    ];
        
}
