<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    public function index()
    {
        return Jenis::all();
    }
    public function store(Request $request)
    {
        return Jenis::create([
            'namajenis' => $request['nama_jenis'],
        ]);
    }
    public function hapusDataJenis($id)
    {
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();
    }
    public function ubahDataJenis(request $request, $id)
    {
        $jenis = Jenis::findOrFail($id);
        $data =[
            'namajenis' => $request['namajenis'],
             
        ];
        $jenis->update($data);
    }
}
