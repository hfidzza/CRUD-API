<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * GET /api/pelanggan/read
     */
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Customer::all()
        ]);
    }

    /**
     * POST /api/pelanggan/create
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'address' => 'nullable',
        ]);

        $customer = Customer::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pelanggan berhasil ditambahkan',
            'data'    => $customer
        ], 201);
    }

    /**
     * PUT /api/pelanggan/update/{id}
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'address' => 'nullable',
        ]);

        $customer = Customer::findOrFail($id);

        $customer->update([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address' => $request->address,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pelanggan berhasil diupdate',
            'data'    => $customer
        ]);
    }

    /**
     * DELETE /api/pelanggan/delete/{id}
     */
    public function destroy(string $id)
    {
        Customer::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Pelanggan berhasil dihapus'
        ]);
    }
}
