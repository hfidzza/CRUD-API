<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // READ /produk/read
    public function index()
    {
        return response()->json([
            "success" => true,
            "data" => Product::all()
        ], 200);
    }

    // CREATE /produk/create
    public function store(Request $request)
    {
        try {
            $product = Product::create($request->all());

            return response()->json([
                'success' => true,
                'data' => $product
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
        
        $produk = Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return response()->json([
            "success" => true,
            "message" => "Produk berhasil ditambahkan",
            "data" => $produk
        ], 201);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $produk = Product::findOrFail($id);
        $produk->update($request->all());

        return response()->json([
            "success" => true,
            "message" => "Produk berhasil diupdate",
            "data" => $produk
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $produk = Product::findOrFail($id);
        $produk->delete();

        return response()->json([
            "success" => true,
            "message" => "Produk berhasil dihapus"
        ]);
    }
}
