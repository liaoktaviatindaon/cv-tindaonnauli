<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function store(Request $request)
    {
        return User::create([
            'name' => $request['nama'],
            'email' => $request['email'],
            'password' => bcrypt ($request['password']),
        ]); 
    }
    public function hapusPengguna($id)
    {
        $pengguna = User::findOrFail($id);
        $pengguna->delete();
    }
    public function ubahPengguna(request $request, $id)
    {
        $pengguna = User::findOrFail($id);
        $data =[
            'name' => $request['nama'],
            'email' => $request['email'],
            'password' => bcrypt ($request['password']), 
        ];
        $pengguna->update($data);
    }
}
