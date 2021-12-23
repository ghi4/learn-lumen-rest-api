<?php

namespace App\Http\Controllers;

use App\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create(Request $request) {
        $data = $request->all();
        $produk = Produk::create($data);

        return response()->json($produk);
    }
}
