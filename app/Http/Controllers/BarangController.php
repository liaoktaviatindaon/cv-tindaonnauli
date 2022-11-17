<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return Barang::all();
    }
    public function store(Request $request)
    {
        return Barang::create([
            'nama_barang' => $request['namabarang'],
            'jenis_id' => $request['jenisid'],
            'harga_beli' => $request['hargabeli'],
            'harga_jual' => $request['hargajual'],
            'stok' => $request['stok'],
        ]);
    }
    public function hapusDataBarang($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
    }
    public function ubahDataBarang(request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $data =[
            'nama_barang' => $request['namabarang'],
            'jenis_id' => $request['jenisid'],
            'harga_beli' => $request['hargabeli'],
            'harga_jual' => $request['hargajual'],
            'stok' => $request['stok'], 
        ];
        $barang->update($data);
    }
}
